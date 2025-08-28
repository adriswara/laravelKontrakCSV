@extends('layouts.app')
@section('title', 'Edit Pegawai')
@section('content')
<!-- main content -->
<div class="container mt-5">
    <h2>Edit Pegawai</h2>

    <form action="{{ url('/pegawai/update/' . $pegawai->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" name="nama_pegawai" class="form-control" value="{{ $pegawai->nama_pegawai }}">
        </div>

        <div class="mb-3">
            <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
            <select name="kode_jabatan" class="form-control">
                <option value="">-- Pilih Jabatan --</option>
                @foreach ($jabatan as $j)
                    <option value="{{ $j->kode_jabatan }}" {{ $pegawai->kode_jabatan == $j->kode_jabatan ? 'selected' : '' }}>{{ $j->kode_jabatan }} - {{ $j->nama_jabatan }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="kode_cabang" class="form-label">Kode Cabang</label>
            <select name="kode_cabang" class="form-control">
                <option value="">-- Pilih Cabang --</option>
                @foreach ($cabang as $c)
                    <option value="{{ $c->kode_cabang }}" {{ $pegawai->kode_cabang == $c->kode_cabang ? 'selected' : '' }}>{{ $c->kode_cabang }} - {{ $c->nama_cabang }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_mulai_kontrak" class="form-label">Tanggal Mulai Kontrak</label>
            <input type="date" name="tanggal_mulai_kontrak" class="form-control" value="{{ $pegawai->tanggal_mulai_kontrak }}">
        </div>

        <div class="mb-3">
            <label for="tanggal_akhir_kontrak" class="form-label">Tanggal Akhir Kontrak</label>
            <input type="date" name="tanggal_akhir_kontrak" class="form-control" value="{{ $pegawai->tanggal_akhir_kontrak }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<!-- end main content -->
@endsection
