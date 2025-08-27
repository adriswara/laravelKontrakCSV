@include('component.header')
<!-- main content -->
<h1>List Jabatan</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode Jabatan</th>
            <th>Nama Jabatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jabatans as $jabatan)
        <tr>
            <td>{{ $jabatan->id }}</td>
            <td>{{ $jabatan->kode_jabatan }}</td>
            <td>{{ $jabatan->nama_jabatan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- end main content -->
@include('component.footer')