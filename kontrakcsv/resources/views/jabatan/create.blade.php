@extends('layouts.app')
@section('title', 'Tambah Jabatan')
@section('content')
<!-- main content -->
<div class="container mt-5">
    <h2>Tambah Jabatan Baru</h2>

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

    <form action="{{ url('/jabatan/store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="kode_Jabatan" class="form-label">Kode Jabatan</label>
            <input type="text" name="kode_jabatan" class="form-control" value="{{ old('kode_jabatan') }}" placeholder="Contoh: 110">
        </div>

        <div class="mb-3">
            <label for="nama_Jabatan" class="form-label">Nama Jabatan</label>
            <input type="text" name="nama_jabatan" class="form-control" value="{{ old('nama_jabatan') }}" placeholder="Contoh: Jabatan Kepala Cabang xyz">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<!-- end main content -->
@endsection