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
                <th>Nama</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $pasien)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->nik }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>
                    <a href="{{ route('pasiens.edit', $pasien->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pasiens.destroy', $pasien->id) }}" method="POST" style="display:inline;">
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
