<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all();

        return response()->json(["profiles" => $profiles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "nama" => ['required'],
            "tentang_saya" => ['required'],
            "tempat_tanggal_lahir" => ['required'],
        ]);

        Profile::create([
            "nama" => $request->nama,
            "tentang_saya" => $request->tentang_saya,
            "tempat_tanggal_lahir" => $request->tempat_tanggal_lahir,
        ]);

        return response()->json(["message" => "Data Berhasil Dibuat"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profiles = Profile::find($id);

        return response()->json(["profiles" => $profiles]);
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
        request()->validate([
            "nama" => ['required'],
            "tentang_saya" => ['required'],
            "tempat_tanggal_lahir" => ['required'],
        ]);

        Profile::find($id)->update([
            "nama" => $request->nama,
            "tentang_saya" => $request->tentang_saya,
            "tempat_tanggal_lahir" => $request->tempat_tanggal_lahir,
        ]);

        return response()->json(["message" => "Data Berhasil Dibuat"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profile::find($id)->delete();

        return response()->json(["message" => "Data berhasil dihapus"]);
    }
}
