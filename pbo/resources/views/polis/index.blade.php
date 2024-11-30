<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $poli)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $poli->kode_poli }}</td>
                <td>{{ $poli->nama_poli }}</td>
                <td>{{ $poli->status }}</td>
                <td>
                    <a href="{{ route('polis.edit', $poli->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('polis.destroy', $poli->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
