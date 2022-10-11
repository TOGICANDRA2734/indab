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
        $data = DB::table('indab_absensi')->select('*')->get();

        return view('absensi.create', compact('data'));
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
            'tgl' => Carbon::now(),
            'judul_meeting' => $request->judul_meeting,
            'waktu' => $request->waktu,
            'peserta' => $request->peserta,
            'jumlah' => $request->jumlah,
            'notulen' => $request->notulen,
            'dok_1' => $request->dok_1,
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
            'alamat' => 'required',
            'jabatan' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
        ]);

        
        $report = AbsensiDetail::create([
            'id_meeting' => $id,
            'nama' => $request->nama,
            'perusahaan' => $request->perusahaan,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
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
