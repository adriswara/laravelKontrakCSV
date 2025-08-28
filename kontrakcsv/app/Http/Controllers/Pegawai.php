<?php

namespace App\Http\Controllers;

// use App\Models\Pegawai;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pegawai extends Controller
{
    public function index()
    {
        $pegawais = \App\Models\Pegawai::all();
        return view('pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        //untuk dropdown
        $jabatan = \App\Models\Jabatan::all();
        $cabang = \App\Models\Cabang::all();
        //untuk dropdown
        return view('pegawai.create', compact('jabatan', 'cabang'));
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'kode_jabatan' => 'required|string|max:255',
            'kode_cabang' => 'required|string|max:255',
            'tanggal_mulai_kontrak' => 'required|date',
            'tanggal_akhir_kontrak' => 'required|date|after_or_equal:tanggal_mulai_kontrak',
        ]);

        // Simpan data ke database
        \App\Models\Pegawai::create([
            'nama_pegawai' => $request->nama_pegawai,
            'kode_jabatan' => $request->kode_jabatan,
            'kode_cabang' => $request->kode_cabang,
            'tanggal_mulai_kontrak' => $request->tanggal_mulai_kontrak,
            'tanggal_akhir_kontrak' => $request->tanggal_akhir_kontrak,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil disimpan.');
    }

    public function edit($id)
    {
        //untuk dropdown
        $jabatan = \App\Models\Jabatan::all();
        $cabang = \App\Models\Cabang::all();
        //untuk dropdown
        $pegawai = \App\Models\Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai', 'jabatan', 'cabang'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_pegawai' => 'required|string|max:255',
            'kode_jabatan' => 'required|string|max:255',
            'kode_cabang' => 'required|string|max:255',
            'tanggal_mulai_kontrak' => 'required|date',
            'tanggal_akhir_kontrak' => 'required|date|after_or_equal:tanggal_mulai_kontrak',
        ]);

        // Update data di database
        $pegawai = \App\Models\Pegawai::findOrFail($id);
        $pegawai->update([
            'nama_pegawai' => $request->nama_pegawai,
            'kode_jabatan' => $request->kode_jabatan,
            'kode_cabang' => $request->kode_cabang,
            'tanggal_mulai_kontrak' => $request->tanggal_mulai_kontrak,
            'tanggal_akhir_kontrak' => $request->tanggal_akhir_kontrak,
        ]);

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pegawai = \App\Models\Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus.');
    }

    public function show($id)
    {
        $pegawai = \App\Models\Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));
    }

    public function upload()
    {
        return view('pegawai.upload');
    }

    public function uploadPreview(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('file');
        $filePath = $file->getRealPath();
        $fileHandle = fopen($filePath, 'r');

        // Lewati baris header
        $header = fgetcsv($fileHandle);
        $preview = [];
        while (($row = fgetcsv($fileHandle)) !== false) {
            $preview[] = $row;
        }
        fclose($fileHandle);

        // Simpan preview ke session
        session(['preview' => $preview]);

        return redirect()->back();
    }

    public function uploadInsert()
    {
        $preview = session('preview', []);
        foreach ($preview as $row) {
            \App\Models\Pegawai::create([
                'nama_pegawai' => $row[0],
                'kode_jabatan' => $row[1],
                'kode_cabang' => $row[2],
                'tanggal_mulai_kontrak' => $row[3],
                'tanggal_akhir_kontrak' => $row[4],
            ]);
        }

        // Hapus preview dari session
        session()->forget('preview');

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diimpor.');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('file');
        $filePath = $file->getRealPath();
        $fileHandle = fopen($filePath, 'r');

        // Lewati baris header
        fgetcsv($fileHandle);

        while (($row = fgetcsv($fileHandle)) !== false) {
            \App\Models\Pegawai::create([
                'nama_pegawai' => $row[0],
                'kode_jabatan' => $row[1],
                'kode_cabang' => $row[2],
                'tanggal_mulai_kontrak' => $row[3],
                'tanggal_akhir_kontrak' => $row[4],
            ]);
        }

        fclose($fileHandle);

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diimpor.');
    }
}
