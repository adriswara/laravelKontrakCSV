@extends('layouts.app')
@section('title', 'Tambah Cabang')
@section('content')
<!-- main content -->
<div class="container mt-5">
    <h2>Tambah Cabang Baru</h2>

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

    <form action="{{ url('/cabang/store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="kode_cabang" class="form-label">Kode Cabang</label>
            <input type="text" name="kode_cabang" class="form-control" value="{{ old('kode_cabang') }}" placeholder="Contoh: CB006">
        </div>

        <div class="mb-3">
            <label for="nama_cabang" class="form-label">Nama Cabang</label>
            <input type="text" name="nama_cabang" class="form-control" value="{{ old('nama_cabang') }}" placeholder="Contoh: Cabang Semarang">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<!-- end main content -->
@endsection