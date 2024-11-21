<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar bg-success navbar-expand-lg">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <strong><a class="nav-link" href="/buku/index">Data Buku</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link active" aria-current="page" href="/loans/index">Data Peminjaman</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link" href="/user/index">Data Pengguna</a></strong>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Tambah Data Peminjaman Buku</h2>
        <form action="/loans/store" method="POST">

            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">ID Peminjaman</label>
                <input type="number" id="id_loans" name="id_loans" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="id_buku" class="form-label">ID Buku</label>
                <select class="form-select" aria-label="Default select example" name="id_buku">
                <option selected>Pilih ID Buku</option>
                <?php foreach ($BukuController as $Buku): ?>
                <option value="<?php echo $Buku['id_buku'];?>"><?php echo $Buku['id_buku'];?></option>
                <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="id_buku" class="form-label">ID Penguna</label>
                <select class="form-select" aria-label="Default select example" name="id_user">
                <option selected>Pilih ID Pengguna</option>
                <?php foreach ($UserController as $user): ?>
                <option value="<?php echo $user['id_user'];?>"><?php echo $user['id_user'];?></option>
                <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                <input type="date" id="tgl_kembali" name="tgl_kembali" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Tambah Peminjaman</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
