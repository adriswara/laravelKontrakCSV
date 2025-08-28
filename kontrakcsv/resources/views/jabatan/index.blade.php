@extends('layouts.app')
@section('title', 'List Jabatan')
@section('content')

<!-- main content -->
<h1>List Jabatan</h1>
<br>
<a href="{{url('jabatan/create')}}" class="btn btn-sm btn-primary">Create</a>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode Jabatan</th>
            <th>Nama Jabatan</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jabatans as $jabatan)
        <tr>
            <td>{{ $jabatan->id }}</td>
            <td>{{ $jabatan->kode_jabatan }}</td>
            <td>{{ $jabatan->nama_jabatan }}</td>
            <td>
                <a href="{{ url('/jabatan/' . 'edit/' . $jabatan->id) }}" class="btn btn-sm btn-warning">Edit</a>
            </td>
            <td>
                <form action="{{ url('/jabatan/destroy/' . $jabatan->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus cabang ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- end main content -->
@endsection