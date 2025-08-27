@include('component.header')
<!-- main content -->
<div class="container mt-5">
    <h2>Edit Cabang</h2>

    <form action="{{ url('/cabang/' . 'update/' . $cabang->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="kode_cabang" class="form-label">Kode Cabang</label>
            <input type="text" name="kode_cabang" class="form-control" value="{{ $cabang->kode_cabang }}">
        </div>

        <div class="mb-3">
            <label for="nama_cabang" class="form-label">Nama Cabang</label>
            <input type="text" name="nama_cabang" class="form-control" value="{{ $cabang->nama_cabang }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<!-- end main content -->
@include('component.footer')