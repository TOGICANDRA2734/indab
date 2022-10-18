<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\AbsensiDetail;
use App\Models\indabAbsensiImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $search = $request->has('search') ? $request->search : null;
        $data = DB::table('indab_absensi')
        ->selectRaw("
            id, judul_meeting, DATE_FORMAT(tgl, \"%d-%m-%Y\") tgl, waktu, IF(link_meeting='', 'Meeting Offline', link_meeting) link_meeting, IF(status_meeting=0, 'Akan Dilaksanakan', IF(status_meeting=1, 'Sedang Dilaksanakan', 'Telah Dilaksanakan')) status_meeting, ifnull(link_dok_1, '-') link_dok_1
        ")
        ->when($search, function($query, $search){
            $query->where('judul_meeting', 'LIKE', "%" . $search . "%");
        })
        ->orderByRaw('YEAR(tgl) desc')
        ->orderByRaw('MONTH(tgl) desc')
        ->orderByRaw('DAY(tgl) desc')
        ->orderBy('id')
        ->get();

        $lokasi = DB::table('indab_lokasi')->select('*')->get();

        if($request->has('search')){
            $response['data'] = $data;
            return response()->json($response);
        } else {
            return view('absensi.create', compact('data', 'lokasi'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_data(Request $request)
    {
        $where = count($request->all()) > 0 ? "WHERE a.lokasi=".$request->lokasi  : "";

        // TODO USER
        $subquery = "SELECT a.id, judul_meeting, DATE_FORMAT(tgl, \"%d-%m-%Y\") tgl, waktu, IF(link_meeting='', 'Meeting Offline', link_meeting) link_meeting, IF(status_meeting=0, 'Akan Dilaksanakan', IF(status_meeting=1, 'Sedang Dilaksanakan', 'Telah Dilaksanakan')) status_meeting, IFNULL(link_dok_1, '-') link_dok_1
        FROM indab_absensi a 
        JOIN INDAB_LOKASI b 
        ON a.lokasi=b.kode
        ".$where."
        ORDER BY a.lokasi, a.tgl, a.id";
        $data = collect(DB::select(DB::raw($subquery)));

        $lokasi = DB::table('indab_lokasi')->select('*')->get();

        return view('absensi.create', compact('data', 'lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_meeting' => 'required',
            'tgl' => 'required',
            'waktu' => 'required',
        ]);

        $dokumen = ['file_notulen', 'dok_1', 'dok_2', 'dok_3', 'dok_4', 'dok_5'];
        foreach($dokumen as $dt){
            if($request->hasFile($dt)){
                $file = $request->file($dt);
                $ext = $file->extension();
                $namaFile = $request->lokasi . '_' . Carbon::now()->format('d_m_Y') . '_' . Carbon::now()->format('H_i_s') . '_' . Str::random(rand(0,15)) . '.' . $ext;
                $file->storeAs('public/'. $request->tgl .'/Meeting', $namaFile);
                $data[] = $namaFile ? $namaFile : "";
            }    
        }

        $report = Absensi::create([
            'tgl' => $request->tgl,
            'judul_meeting' => $request->judul_meeting,
            'waktu' => $request->waktu,
            'peserta' => $request->has('peserta') ? $request->peserta : "",
            'jumlah' => $request->has('jumlah') ? $request->jumlah : "",
            'notulen' => $request->has('notulen') ? $request->notulen : "",
            'lokasi' => $request->has('lokasi') ? $request->lokasi : "",
            'link_meeting' => $request->has('link_meeting') ? $request->link_meeting : "",
            'file_notulen' => !empty($data[0]) ? $data[0] : null,
            'dok_1' => !empty($data[1]) ? $data[1] : null,
            'dok_2' => !empty($data[2]) ? $data[2] : null,
            'dok_3' => !empty($data[3]) ? $data[3] : null,
            'dok_4' => !empty($data[4]) ? $data[4] : null,
            'dok_5' => !empty($data[5]) ? $data[5] : null,
            'edit' => $request->edit,
        ]);
        
 
        if($report){
            return redirect()->route('absensi.create')->with(['success' => 'Data Berhasil Ditambah!']);
        } else {
            return redirect()->route('absensi.create')->with(['error' => 'Data Gagal Ditambah!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('indab_absensi_detail')->select('*')->where('id_meeting', '=', $id)->get();
        $lokasi = Absensi::select('lokasi')->where('id', $id)->get();
        $dataMeeting = Absensi::findOrFail($id);
        
        $image = indabAbsensiImage::select('file')->where('kode', $lokasi[0]->lokasi)->get();

        return view('absensi.show', compact('data', 'id', 'image', 'dataMeeting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judulRapat = Absensi::select('judul_meeting')->where('id', $id)->get();
        return view('absensi.edit', compact('id', 'judulRapat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $request->validate([
            'nama' => 'required',
            'perusahaan' => 'required',
        ]);

        
        $report = AbsensiDetail::create([
            'id_meeting' => $id,
            'nama' => $request->nama,
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat ? $request->alamat : "" ,
            'jabatan' => $request->jabatan ? $request->jabatan : "" ,
            'kontak' => $request->kontak ? $request->kontak : "" ,
        ]);
        

        if($report){
            return redirect()->route('absensi.show', $id)->with(['success' => 'Data Berhasil Ditambah!']);
        } else {
            return redirect()->route('absensi.show', $id)->with(['error' => 'Data Gagal Ditambah!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_absensi($id)
    {
        $judulRapat = Absensi::select('judul_meeting')->where('id', $id)->get();
        $data = Absensi::findOrFail($id);
        $lokasi = collect(DB::select(DB::raw("SELECT * FROM indab_lokasi")));
        return view('absensi.editAbsensi', compact('data', 'judulRapat','id', 'lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_absensi(Request $request, $id)
    {   
        $record = Absensi::findOrFail($id);
        $request->validate([
            'judul_meeting' => 'required',
            'waktu' => 'required',
        ]);

        $data =[];
        $dokumen = ['file_notulen', 'dok_1', 'dok_2', 'dok_3', 'dok_4', 'dok_5'];
        foreach($dokumen as $dt){
            if($request->hasFile($dt)){
                $file = $request->file($dt);
                $ext = $file->extension();
                $namaFile = $request->lokasi . '_' . Carbon::now()->format('d_m_Y') . '_' . Carbon::now()->format('H_i_s') . '_' . Str::random(rand(0,15)) . '.' . $ext;
                $file->storeAs('public/'. $request->tgl .'/Meeting', $namaFile);
                $data[] = $namaFile ? $namaFile : "";
            }    
        }

        if ($request->edit == $record->edit) {
            $record->update([
                'tgl' => $request->tgl,
                'judul_meeting' => $request->judul_meeting,
                'waktu' => $request->waktu,
                'peserta' => $request->has('peserta') ? $request->peserta : $record->peserta,
                'jumlah' => $request->has('jumlah') ? $request->jumlah : $record->jumlah,
                'notulen' => $request->has('notulen') ? $request->notulen : $record->notulen,
                'lokasi' => $request->has('lokasi') ? $request->lokasi : $record->lokasi,
                'link_meeting' => $request->has('link_meeting') ? $request->link_meeting : $record->link_meeting,
                'status_meeting' => $record->tgl > Carbon::now() ? 2 : ($record->tgl < Carbon::now() ? 1 : 0),
                'file_notulen' => $request->hasFile('file_notulen') ? $data[0] : $record->file_notulen,
                'dok_1' => $request->hasFile('dok_1') ? $data[1] : $record->dok_1,
                'dok_2' => $request->hasFile('dok_2') ? $data[2] : $record->dok_2,
                'dok_3' => $request->hasFile('dok_3') ? $data[3] : $record->dok_3,
                'dok_4' => $request->hasFile('dok_4') ? $data[4] : $record->dok_4,
                'dok_5' => $request->hasFile('dok_5') ? $data[5] : $record->dok_5,
            ]);
            
    
            if($record){
                return redirect()->route('absensi.create')->with(['success' => 'Data Berhasil Diubah!']);
            } else {
                return redirect()->route('absensi.create')->with(['error' => 'Data Gagal Diubah!']);
            }
        } else {
            return redirect()->route('absensi.create')->with(['error' => 'Token Salah!']);   
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function check_resource($id)
    {
        $data = DB::table('indab_absensi')
        ->selectRaw("tgl, IFNULL(file_notulen, '-') file_notulen, IFNULL(dok_1, '-') dok_1, IFNULL(dok_2, '-') dok_2, IFNULL(dok_3, '-') dok_3, IFNULL(dok_4, '-') dok_4, IFNULL(dok_5, '-') dok_5, IFNULL(link_dok_1, '-') link_dok_1, IFNULL(link_dok_2, '-') link_dok_2")
        ->where('id', '=', $id)
        ->get();

        $title = [
            'file_notulen' => 'File Notulen',
            'dok_1' => 'Dokumen 1',
            'dok_2' => 'Dokumen 2',
            'dok_3' => 'Dokumen 3',
            'dok_4' => 'Dokumen 4',
            'dok_5' => 'Dokumen 5',
            'link_dok_1' => 'Link Dokumen 1',
            'link_dok_2' => 'Link Dokumen 2',
        ];
        
        return view('absensi.detail_dokumen', compact('data', 'title'));
    }
}
