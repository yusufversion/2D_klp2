<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pengguna</title>
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

    <!-- Container -->
    <div class="container mt-4">
        <h2 class="text-center mb-4">Daftar Pengguna</h2>
        <a href="/user/create" class="btn btn-primary mb-3">Tambah Pengguna Baru</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Pengguna</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>No Anggota</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td>P-<?= htmlspecialchars($user['id_user']) ?></td>
                        <td><?= htmlspecialchars($user['nama']) ?></td>
                        <td><?= htmlspecialchars($user['email']) ?></td>
                        <td><?= htmlspecialchars($user['password']) ?></td>
                        <td><?= htmlspecialchars($user['no_anggota']) ?></td>
                        <td>
                            <a href="/user/edit/<?= $user['id_user']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/loans/create" class="btn btn-success btn-sm">Riwayat Peminjaman</a>
                            <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $user['id_user']; ?>)">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
                    <p>Apakah Anda yakin ingin menghapus pengguna ini?</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let deleteUserId;

        function confirmDelete(id_user) {
            const modal = new bootstrap.Modal(document.getElementById('confirmDeleteModal'));
            const checkbox = document.getElementById('confirmDeleteCheckbox');
            const confirmButton = document.getElementById('confirmDeleteButton');

            // Reset the checkbox and button state
            checkbox.checked = false;
            confirmButton.disabled = true;

            // Save user ID to delete
            deleteUserId = id_user;

            // Show the modal
            modal.show();

            // Enable the delete button when checkbox is checked
            checkbox.addEventListener('change', function() {
                confirmButton.disabled = !checkbox.checked;
            });

            // Add event listener for the delete button
            confirmButton.addEventListener('click', function() {
                if (checkbox.checked) {
                    window.location.href = '/user/delete/' + deleteUserId;
                }
            });
        }
    </script>
</body>

</html>
