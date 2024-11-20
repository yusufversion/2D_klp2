<!-- app/views/loans/index.php -->
<h2>Data Peminjaman Buku</h2>
<a href="/loans/create">Tambah Data Peminjaman Buku</a>
<ul>
    <?php foreach ($TabelLoansController as $loans): ?>
        <div>
            <p><?= htmlspecialchars($loans['id_loans']) ?> - <?= htmlspecialchars($loans['id_buku']) ?> - <?= htmlspecialchars($loans['id_user']) ?> - <?= htmlspecialchars($loans['tgl_pinjam']) ?> - <?= htmlspecialchars($loans['tgl_kembali']) ?> 
            <a href="/loans/edit/<?php echo $loans['id_loans']; ?>">Edit</a> |
            <a href="/loans/delete/<?php echo $loans['id_loans']; ?>" onclick="return confirm('Apakah Anda Yakin untuk Menghapus?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>
