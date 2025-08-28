@extends('layouts.app')
@section('title', 'Tambah Pegawai')
@section('content')
<!-- main content -->
<div class="container mt-5">
    <h2>Tambah Pegawai Baru</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong> Ada kesalahan pada input:<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <form action="{{ url('/pegawai/store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" name="nama_pegawai" class="form-control" value="{{ old('nama_pegawai') }}" placeholder="Contoh: Budi Santoso">
        </div>

        <div class="mb-3">
            <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
            <select name="kode_jabatan" class="form-control">
                <option value="">-- Pilih Jabatan --</option>
                @foreach ($jabatan as $j)
                    <option value="{{ $j->kode_jabatan }}" {{ old('kode_jabatan') == $j->kode_jabatan ? 'selected' : '' }}>{{ $j->kode_jabatan }} - {{ $j->nama_jabatan }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="kode_cabang" class="form-label">Kode Cabang</label>
            <select name="kode_cabang" class="form-control">
                <option value="">-- Pilih Cabang --</option>
                @foreach ($cabang as $c)
                    <option value="{{ $c->kode_cabang }}" {{ old('kode_cabang') == $c->kode_cabang ? 'selected' : '' }}>{{ $c->kode_cabang }} - {{ $c->nama_cabang }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_mulai_kontrak" class="form-label">Tanggal Mulai Kontrak</label>
            <input type="date" name="tanggal_mulai_kontrak" class="form-control" value="{{ old('tanggal_mulai_kontrak') }}">
        </div>

        <div class="mb-3">
            <label for="tanggal_akhir_kontrak" class="form-label">Tanggal Akhir Kontrak</label>
            <input type="date" name="tanggal_akhir_kontrak" class="form-control" value="{{ old('tanggal_akhir_kontrak') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<!-- end main content -->
@endsection
