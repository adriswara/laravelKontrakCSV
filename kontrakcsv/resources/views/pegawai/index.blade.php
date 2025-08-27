@include('component.header')
<!-- main content -->
<h1>List Pegawai</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>Cabang</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
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
        </tr>
        @endforeach
    </tbody>
</table>
<!-- end main content -->
@include('component.footer')