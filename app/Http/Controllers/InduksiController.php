<?php

namespace App\Http\Controllers;

use App\Models\Induksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InduksiController extends Controller
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
        $data = DB::table('indab_induksi')->select("*")->get();
        return view('induksi.create', compact('data'));
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
            'nama'=> 'required',
            'perusahaan'=> 'required',
            'nama'=> 'required|min:3',
            'jabatan'=> 'required',
            'keperluan'=> 'required',
            'waktu'=> 'required',
            'no_hp'=> 'required|max:15',
        ]);

        $report = Induksi::create([
            'nama'=> $request->nama,
            'perusahaan'=> $request->perusahaan,
            'nama'=> $request->nama,
            'jabatan'=> $request->jabatan,
            'keperluan'=> $request->keperluan,
            'waktu'=> $request->waktu,
            'no_hp'=> $request->no_hp,
        ]);
        

        if($report){
            return redirect()->route('induksi.create')->with(['success' => 'Data Berhasil Ditambah!']);
        } else {
            return redirect()->route('induksi.create')->with(['error' => 'Data Gagal Ditambah!']);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
