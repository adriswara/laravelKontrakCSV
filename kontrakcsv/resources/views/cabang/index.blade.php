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
            <td>
                <a href="{{ url('/cabang/' . 'edit/' . $cabang->id) }}" class="btn btn-sm btn-warning">Edit</a>
            </td>
            <td>
                <form action="{{ url('/cabang/destroy/' . $cabang->id) }}" method="POST" style="display:inline;">
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
@include('component.footer')