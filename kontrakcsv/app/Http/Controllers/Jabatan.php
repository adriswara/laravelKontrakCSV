<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Jabatan extends Controller
{
    public function index()
    {
        return view('jabatan.index');
    }
    public function create()
    {
        return view('jabatan.create');
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_jabatan' => 'required|string|max:255',
            'nama_jabatan' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        \App\Models\Jabatan::create([
            'kode_jabatan' => $request->kode_jabatan,
            'nama_jabatan' => $request->nama_jabatan,
        ]);

        return redirect()->route('jabatan.index')->with('success', 'Data jabatan berhasil disimpan.');
    }

    public function edit($id)
    {
        $jabatan = \App\Models\Jabatan::findOrFail($id);
        return view('jabatan.edit', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'kode_jabatan' => 'required|string|max:255',
            'nama_jabatan' => 'required|string|max:255',
        ]);

        // Update data di database
        $jabatan = \App\Models\Jabatan::findOrFail($id);
        $jabatan->update([
            'kode_jabatan' => $request->kode_jabatan,
            'nama_jabatan' => $request->nama_jabatan,
        ]);

        return redirect()->route('jabatan.index')->with('success', 'Data jabatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jabatan = \App\Models\Jabatan::findOrFail($id);
        $jabatan->delete();

        return redirect()->route('jabatan.index')->with('success', 'Data jabatan berhasil dihapus.');
    }

    public function show($id)
    {
        $jabatan = \App\Models\Jabatan::findOrFail($id);
        return view('jabatan.show', compact('jabatan'));
    }
}
