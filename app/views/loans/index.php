<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                        <strong><a class="nav-link active" aria-current="page" href="/loans/index">Data Peminjaman</a></strong>
                    </li>
                    <li class="nav-item">
                        <strong><a class="nav-link" href="/user/index">Data Pengguna</a></strong>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h2 class="text-center mb-4">Daftar Peminjaman Buku</h2>
        <div class="container">
        <a href="/loans/create" class="btn btn-primary mb-3">Tambah Data Peminjaman Buku++ </a>
        <div class="row">
            <div class="card">
                <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Peminjaman</th>
                    <th>ID Buku</th>
                    <th>ID User</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($TabelLoansController as $loans): ?>
        <tr>
            <td>L-<?= htmlspecialchars($loans['id_loans']) ?></td>
            <!-- Link ke halaman detail buku -->
            <td>
                <a href="/buku/detail/<?= htmlspecialchars($loans['id_buku']) ?>" class="text-decoration-none">
                    B-<?= htmlspecialchars($loans['id_buku']) ?>
                </a>
            </td>
            <!-- Link ke halaman detail user -->
            <td>
                <a href="/user/detail/<?= htmlspecialchars($loans['id_user']) ?>" class="text-decoration-none">
                    P-<?= htmlspecialchars($loans['id_user']) ?>
                </a>
            </td>
            <td><?= htmlspecialchars($loans['tgl_pinjam']) ?></td>
            <td><?= htmlspecialchars($loans['tgl_kembali']) ?></td>
            <td>
                <a href="/loans/edit/<?= htmlspecialchars($loans['id_loans']) ?>" class="btn btn-warning btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= htmlspecialchars($loans['id_loans']) ?>)">Delete</button>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>

        </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus peminjaman ini?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="confirmDeleteCheckbox">
                        <label class="form-check-label" for="confirmDeleteCheckbox">
                            Centang untuk mengonfirmasi penghapusan.
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteButton" disabled>Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        function confirmDelete(id_loans) {
            const modal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
            const checkbox = document.getElementById('confirmDeleteCheckbox');
            const confirmButton = document.getElementById('confirmDeleteButton');

            // Reset the checkbox and button state
            checkbox.checked = false;
            confirmButton.disabled = true;

            // Show the modal
            modal.show();

            // Enable the delete button when checkbox is checked
            checkbox.addEventListener('change', function() {
                confirmButton.disabled = !checkbox.checked;
            });

            // Add event listener for the delete button
            confirmButton.addEventListener('click', function() {
                if (checkbox.checked) {
                    window.location.href = '/loans/delete/' + id_loans;
                }
            });
        }
    </script>
</body>
</html>
