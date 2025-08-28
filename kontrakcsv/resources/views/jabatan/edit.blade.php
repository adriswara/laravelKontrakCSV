@extends('layouts.app')
@section('title', 'Edit Jabatan')
@section('content')
<!-- main content -->
<div class="container mt-5">
    <h2>Edit Jabatan</h2>

    <form action="{{ url('/jabatan/' . 'update/' . $jabatan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="kode_jabatan" class="form-label">Kode Jabatan</label>
            <input type="text" name="kode_jabatan" class="form-control" value="{{ $jabatan->kode_jabatan }}">
        </div>

        <div class="mb-3">
            <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
            <input type="text" name="nama_jabatan" class="form-control" value="{{ $jabatan->nama_jabatan }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<!-- end main content -->
@endsection