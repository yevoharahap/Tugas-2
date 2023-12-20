<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function welcome()
    {
        $mhs = Mahasiswa::all();
        return view('welcome', compact('mhs'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mhs = Mahasiswa::orderBy('created_at', 'DESC')->get();
        return view('mahasiswas.index',["judul"=>"SI-Mahasiswa||Mahasiswa"], compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswas.create',["judul"=>"SI-Mahasiswa||Tambah"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success', 'Data Mahasiswa Berhasil DITAMBAH!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mhs = Mahasiswa::findOrFail($id);
  
        return view('mahasiswas.show',["judul"=>"SI-Mahasiswa||Detail"], compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mhs = Mahasiswa::findOrFail($id);
  
        return view('mahasiswas.edit',["judul"=>"SI-Mahasiswa||Edit"], compact('mhs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mhs = Mahasiswa::findOrFail($id);
  
        $mhs->update($request->all());
  
        return redirect()->route('mahasiswa')->with('success', 'Data Mahasiswa Berhasil DIUBAH!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mhs = Mahasiswa::findOrFail($id);
  
        $mhs->delete();
  
        return redirect()->route('mahasiswa')->with('success', 'Data Mahasiswa Berhasil DIHAPUS!');
    }
}
