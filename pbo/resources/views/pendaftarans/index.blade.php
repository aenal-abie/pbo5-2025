
<div class="container">
    <h1>Pendaftaran Pasien</h1>
    <a href="{{ route('pendaftarans.create') }}" class="btn btn-primary mb-3">Tambah Pendaftaran</a>
    <table border=1 class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pasien</th>
                <th>Poli</th>
                <th>Tanggal Kunjungan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pendaftarans as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->pasien->nama }}</td>
                <td>{{ $item->poli->nama_poli }}</td>
                <td>{{ $item->tanggal_kunjungan }}</td>
                <td>
                    <a href="{{ route('pendaftarans.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('pendaftarans.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
