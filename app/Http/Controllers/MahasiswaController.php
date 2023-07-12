<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getMahasiswa = Mahasiswa::latest()->get();
        $no = 1;
        return view('dashboard.mahasiswa.index', compact('getMahasiswa', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nim' => 'required|unique:mahasiswas,nim|numeric',
            'nama' => 'required|string',
            'kelas' => 'required',
        ]);

        try {
            Mahasiswa::create([
                'nim' => $request->nim,
                'nama' => $request->nama,
                'kelas' => $request->kelas
            ]);
        } catch (\Exception $e) {
            return $e;
        }

        return redirect('/mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('dashboard.mahasiswa.update', compact('mahasiswa'));
    }
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
        $validasiNimUpdate = 'required|numeric|unique:mahasiswas,nim';
        $validasiNimNoUpdate = 'required|numeric';
        $request->validate([
            'nama' => 'required',
            'nim' => $request->nim == $mahasiswa->nim ? $validasiNimNoUpdate : $validasiNimUpdate,
            'kelas' => 'required',
        ]);
        $mahasiswa->update([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
        ]);
        return redirect()->route('mahasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
