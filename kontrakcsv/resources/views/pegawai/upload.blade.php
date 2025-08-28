@extends('layouts.app')
@section('title', 'Upload Pegawai')
@section('content')
<div class="container mt-5">
    <h2>Upload Data Pegawai dari Excel/CSV</h2>

    <form action="{{ url('/pegawai/upload-preview') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="file" class="form-label">Pilih File Excel/CSV</label>
            <input type="file" name="file" class="form-control" accept=".csv,.xls,.xlsx" required>
        </div>
        <button type="submit" class="btn btn-success">Upload & Preview</button>
    </form>

    @if (session('preview'))
        <hr>
        <h4>Preview Data Pegawai</h4>
        <form action="{{ url('/pegawai/upload-insert') }}" method="POST">
            @csrf
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Pegawai</th>
                        <th>Kode Jabatan</th>
                        <th>Kode Cabang</th>
                        <th>Tanggal Mulai Kontrak</th>
                        <th>Tanggal Akhir Kontrak</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (session('preview') as $row)
                        <tr>
                            <td>{{ $row[0] }}</td>
                            <td>{{ $row[1] }}</td>
                            <td>{{ $row[2] }}</td>
                            <td>{{ $row[3] }}</td>
                            <td>{{ $row[4] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Insert ke Database</button>
        </form>
    @endif
</div>
@endsection
