<div class="container">
    <h1>Tambah Pendaftaran</h1>
    <form action="{{ route('pendaftarans.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pasien_id" class="form-label">Pasien</label>
            <select name="pasien_id" id="pasien_id" class="form-control">
                <option value="">Pilih Pasien</option>
                @foreach ($pasien as $p)
                    <option value="{{ $p->id }}">{{ $p->nama }}</option>
                @endforeach
            </select>
            @error('pasien_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="poli_id" class="form-label">Poli</label>
            <select name="poli_id" id="poli_id" class="form-control">
                <option value="">Pilih Poli</option>
                @foreach ($poli as $p)
                    <option value="{{ $p->id }}">{{ $p->nama_poli }}</option>
                @endforeach
            </select>
            @error('poli_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan</label>
            <input type="date" name="tanggal_kunjungan" id="tanggal_kunjungan" class="form-control" value="{{ old('tanggal_kunjungan') }}">
            @error('tanggal_kunjungan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pendaftarans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
