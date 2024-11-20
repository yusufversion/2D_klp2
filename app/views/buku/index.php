<!-- app/views/user/index.php -->
<h2>Daftar Buku</h2>
<a href="/Buku/create">Tambah Daftar Buku</a>
<ul>
    <?php foreach ($BukuController as $Buku): ?>
        <div>
            <p><?= htmlspecialchars($Buku['id_buku']) ?> - <?= htmlspecialchars($Buku['judul_buku']) ?> - <?= htmlspecialchars($Buku['pengarang']) ?> - <?= htmlspecialchars($Buku['tahun']) ?>
            <a href="/Buku/edit/<?php echo $Buku['id_buku']; ?>">Edit</a> |
            <a href="/Buku/delete/<?php echo $Buku['id_buku']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    
    <?php endforeach; ?>
</ul>
