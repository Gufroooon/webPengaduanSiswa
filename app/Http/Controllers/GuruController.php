<?php

namespace App\Http\Controllers;
use App\Models\siswa;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data siswa dari database
    $siswas = siswa::all();


    // Kirim data siswa ke view index.blade.php
    return view('Guru.index', compact(var_name: 'siswas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        // Ambil data siswa berdasarkan ID
        $siswasz = siswa::findOrFail($id);
        
        // Kirim data siswa ke view edit.blade.php
        return view('Guru.edit', compact('siswasz'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi data yang diterima
        $request->validate([
            'status' => 'required',
            
            // Tambahkan validasi sesuai kolom yang ada
            
        ]);

        // Cari siswa berdasarkan ID
        $siswasz = siswa::findOrFail($id);

        // Update data siswa
        $siswasz->update([
            'status' => $request->status,
          
            // Tambahkan kolom yang ingin diupdate
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('guru')->with('Success', 'Laporan sudah diterima guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
