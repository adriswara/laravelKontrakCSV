<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
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
</body>
</html>
