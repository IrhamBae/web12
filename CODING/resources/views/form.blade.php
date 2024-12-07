<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Form Tambah Pegawai</h1>
        <form action="{{ route('pegawai.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="posisi" class="form-label">Posisi</label>
                <input type="text" name="posisi" id="posisi" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gaji" class="form-label">Gaji</label>
                <input type="number" name="gaji" id="gaji" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('pegawai.display') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>