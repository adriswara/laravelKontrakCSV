@extends('layouts.app')
@section('title', 'List Pegawai')
@section('content')
<!-- main content -->
<h1>List Pegawai</h1>
<br>
<a href="{{url('pegawai/create')}}" class="btn btn-sm btn-primary">Create</a>
<a href="{{url('pegawai/upload')}}" class="btn btn-sm btn-primary">Upload Sheet</a>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>Cabang</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pegawais as $pegawai)
        <tr>
            <td>{{ $pegawai->id }}</td>
            <td>{{ $pegawai->nama_pegawai }}</td>
            <td>{{ $pegawai->kode_jabatan }}</td>
            <td>{{ $pegawai->kode_cabang }}</td>
            <td>{{ $pegawai->tanggal_mulai_kontrak }}</td>
            <td>{{ $pegawai->tanggal_akhir_kontrak }}</td>
                <td>
                <a href="{{ url('/pegawai/' . 'edit/' . $pegawai->id) }}" class="btn btn-sm btn-warning">Edit</a>
            </td>
            <td>
                <form action="{{ url('/pegawai/destroy/' . $pegawai->id) }}" method="POST" style="display:inline;">
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