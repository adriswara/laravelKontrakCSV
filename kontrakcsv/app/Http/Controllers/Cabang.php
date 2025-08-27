<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cabang extends Controller
{
    public function index()
    {
        $cabangs = \App\Models\Cabang::all();
        return view('cabang.index', compact('cabangs'));
    }
    public function create()
    {
        return view('cabang.create');
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_cabang' => 'required|string|max:255',
            'nama_cabang' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        \App\Models\Cabang::create([
            'kode_cabang' => $request->kode_cabang,
            'nama_cabang' => $request->nama_cabang,
        ]);

        return redirect()->route('cabang.index')->with('success', 'Data cabang berhasil disimpan.');
    }

    public function edit($id)
    {
        $cabang = \App\Models\Cabang::findOrFail($id);
        return view('cabang.edit', compact('cabang'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'kode_cabang' => 'required|string|max:255',
            'nama_cabang' => 'required|string|max:255',
        ]);

        // Update data di database
        $cabang = \App\Models\Cabang::findOrFail($id);
        $cabang->update([
            'kode_cabang' => $request->kode_cabang,
            'nama_cabang' => $request->nama_cabang,
        ]);

        return redirect()->route('cabang.index')->with('success', 'Data cabang berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $cabang = \App\Models\Cabang::findOrFail($id);
        $cabang->delete();

        return redirect()->route('cabang.index')->with('success', 'Data cabang berhasil dihapus.');
    }

    public function show($id)
    {
        $cabang = \App\Models\Cabang::findOrFail($id);
        return view('cabang.show', compact('cabang'));
    }
}
