<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Pegawai</h1>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Posisi</th>
                    <th>Gaji</th>
                    <th>Aksi</th> <!-- Tambahkan kolom Aksi untuk Edit dan Hapus -->
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $pegawai)
                    <tr>
                        <td>{{ $pegawai->id }}</td>
                        <td>{{ $pegawai->name }}</td>
                        <td>{{ $pegawai->posisi }}</td>
                        <td>{{ $pegawai->gaji }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data pegawai</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
