<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\AbsensiDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function create()
    {
        $data = DB::table('indab_absensi')->select('*')->orderBy('tgl')->orderBy('id')->get();
        $lokasi = DB::table('indab_lokasi')->select('*')->get();

        return view('absensi.create', compact('data', 'lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_data(Request $request)
    {
        // TODO ADMIN

        // TODO USER
        $subquery = "SELECT judul_meeting, tgl, waktu, IF(link_meeting is not null, \"Meeting Online\", \"Meeting Offline\") status_ol, status_meeting 
        FROM indab_absensi a 
        JOIN INDAB_LOKASI b 
        ON a.lokasi=b.kode
        WHERE a.lokasi=".$request->lokasi."
        ORDER BY a.lokasi, a.tgl, a.id";
        $data = collect(DB::select(DB::raw($subquery)));
        dd($data);

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
            'waktu' => 'required',
            'peserta' => 'required',
            'jumlah' => 'required',
            'notulen' => 'required',
            'dok_1' => 'required',
        ]);

        
        $report = Absensi::create([
            'tgl' => $request->tgl,
            'judul_meeting' => $request->judul_meeting,
            'waktu' => $request->waktu,
            'peserta' => $request->peserta,
            'jumlah' => $request->jumlah,
            'notulen' => $request->notulen,
            'file_notulen' => $request->file_notulen,
            'dok_1' => $request->dok_1,
            'lokasi' => $request->lokasi,
            'link_meeting' => $request->link_meeting,
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

        return view('absensi.show', compact('data', 'id'));
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
