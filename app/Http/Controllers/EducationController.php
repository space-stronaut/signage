<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::all();

        return response()->json(["educations" => $educations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            "tahun_masuk" => ['required'],
            "tahun_keluar" => ['required'],
            "sekolah" => ['required'],
        ]);

        Education::create([
            "tahun_masuk" => $request->tahun_masuk,
            "tahun_keluar" => $request->tahun_keluar,
            "sekolah" => $request->sekolah,
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
        $educations = Education::find($id);

        return response()->json(["educations" => $educations]);
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
            "tahun_masuk" => ['required'],
            "tahun_keluar" => ['required'],
            "sekolah" => ['required'],
        ]);

        Education::find($id)->update([
            "tahun_masuk" => $request->tahun_masuk,
            "tahun_keluar" => $request->tahun_keluar,
            "sekolah" => $request->sekolah,
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
        Education::find($id)->delete();

        return response()->json(["message" => "Data berhasil dihapus"]);
    }
}
