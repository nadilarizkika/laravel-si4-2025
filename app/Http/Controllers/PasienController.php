<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('pasien/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pasien/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nik', $request->nik);
        Session::flash('nama_pasien', $request->nama_pasien);
        Session::flash('tgl_lahir', $request->tgl_lahir);

        $request->validate([
            'nik' => 'required|numeric|unique:pasien,nik',
            'nama_pasien' => 'required',
            'tgl_lahir' => 'required'
        ],
        [
            'nik.required' => 'NIK tidak boleh kosong!',
            'nik.numeric' => 'NIK harus diisi dalam bentuk angka!',
            'nik.unique' => 'NIK sudah ada sebelumnya!',
            'nama_pasien.required' => 'Nama Pasien tidak boleh kosong!',
            'tgl_lahir.required' => 'Tanggal Lahir tidak boleh kosong!'
        ]);

        $data = [
            'nik' => $request->nik,
            'nama_pasien' => $request->nama_pasien,
            'tgl_lahir' => $request->tgl_lahir
        ];
        pasien::create($data);
        return redirect('/pasien')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
