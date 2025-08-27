<!DOCTYPE html>
<html>

<head>
    <title>List Jabatan</title>
    <style>
        /*  */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        /*  */
        body {
            overflow-x: hidden;
        }

        #sidebar {
            min-height: 100vh;
            background-color: #343a40;
            color: white;
        }

        #sidebar a {
            color: white;
            text-decoration: none;
        }

        #sidebar a:hover {
            background-color: #495057;
        }

        /*  */
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Sistem Daftar Kontrak</a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">List Pegawai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">List Cabang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">List Jabatan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>