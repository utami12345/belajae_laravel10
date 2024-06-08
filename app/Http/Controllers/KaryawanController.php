<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function index()
    {
        // Mengambil data karyawan
        $karyawan = Karyawan::paginate(10);
        
        // Mengirim data karyawan ke view
        return view('karyawan', ['karyawan' => $karyawan]);
    }

    public function tambah()
    {
        // Memanggil view tambah
        return view('karyawan_tambah');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'umur' => 'required',
            'alamat' => 'required'
        ]);

       // Insert data ke table karyawan menggunakan model Karyawan
       Karyawan::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);

        // Alihkan halaman ke halaman karyawan
        return redirect('/karyawan');
    }

    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('karyawan_edit', ['karyawan' => $karyawan]);
    }

    public function update($id, Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'umur' => 'required',
            'alamat' => 'required'
        ]);
      
         $karyawan = Karyawan::find($id);
         $karyawan->nama = $request->nama;
         $karyawan->jabatan = $request->jabatan;
         $karyawan->umur = $request->umur;
         $karyawan->alamat = $request->alamat;
         $karyawan->save();
         return redirect('/karyawan');
    }

    public function delete($id)
    {
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan');
    }

    public function cari(Request $request)
    {
    $cari = $request->cari;
    // mengambil data dari table karyawan sesuai pencarian data
    $karyawan = Karyawan::where('nama', 'like', "%$cari%")->paginate();
    return view('karyawan', ['karyawan' => $karyawan]);
    }

}
