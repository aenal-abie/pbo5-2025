
<div class="container">
    <h1>Tambah Poli</h1>
    <form action="{{ route('polis.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode">Kode Poli</label>
            <input type="text" name="kode_poli" id="kode" class="form-control"
                value="{{ old('kode_poli') }}">
        </div>
        <div class="form-group">
            <label for="nama">Nama Poly</label>
            <input type="text" name="nama_poli" id="nama" class="form-control"
                value="{{ old('nama_poli') }}">
        </div>
        <div class="form-group">
            <label for="alamat">Status</label>
            <input type="radio" name="status" value="aktif" /> Aktif
            <input type="radio" name="status" value ="tidak_aktif"/> Tidak Aktif
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

