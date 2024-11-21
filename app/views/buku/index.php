<?php 
require_once '../app/controllers/NavController.php'; 
$navController = new NavController(); 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
<?php $navController->nav(); ?>

        <h2 class="text-center mb-4">Daftar Buku</h2>
        <div class="container">
        <a href="/buku/create" class="btn btn-primary mb-3">Tambah Daftar Buku</a>
        <div class="row">
            <div class="card">
                <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($BukuController as $Buku): ?>
                    <tr>
                        <td>B-<?= htmlspecialchars($Buku['id_buku']) ?></td>
                        <td><?= htmlspecialchars($Buku['judul_buku']) ?></td>
                        <td><?= htmlspecialchars($Buku['pengarang']) ?></td>
                        <td><?= htmlspecialchars($Buku['tahun']) ?></td>
                        <td>
                            <a href="/buku/edit/<?php echo $Buku['id_buku']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="confirmDelete(<?= $Buku['id_buku']; ?>)">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert Konfirmasi Hapus -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Penghapusan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus buku ini?</p>
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
    <br>
    <?php $navController->footer(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        function confirmDelete(id_buku) {
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
                    window.location.href = '/buku/delete/' + id_buku;
                }
            });
        }
    </script>
</body>
</html>
