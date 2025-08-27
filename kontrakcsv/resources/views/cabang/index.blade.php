@include('component.header')
<!-- main content -->
<h1>List Cabang</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Kode Cabang</th>
            <th>Nama Cabang</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cabangs as $cabang)
        <tr>
            <td>{{ $cabang->id }}</td>
            <td>{{ $cabang->kode_cabang }}</td>
            <td>{{ $cabang->nama_cabang }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- end main content -->
@include('component.footer')