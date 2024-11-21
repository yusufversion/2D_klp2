<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Pengguna Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
      <!-- Navbar -->
      <nav class="navbar bg-success navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Peminjaman Buku</a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <strong><a class="nav-link" href="/buku/index">Data Buku</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link" href="/loans/index">Data Peminjaman</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link active" href="/user/index">Data Pengguna</a></strong>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Tambah Pengguna Baru</h2>
        <form action="/user/store" method="POST" class="p-4 border rounded shadow-sm bg-light">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama pengguna" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email pengguna" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <div class="mb-3">
                <label for="no_anggota" class="form-label">No Anggota</label>
                <input type="number" name="no_anggota" id="no_anggota" class="form-control" placeholder="Masukkan nomor anggota" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/user/index" class="btn btn-secondary">Batal</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
