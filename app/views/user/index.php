<!-- app/views/user/index.php -->
<h2>Daftar Pengguna</h2>
<a href="/user/create">Tambah Pengguna Baru</a>
<ul>
    <?php foreach ($users as $user): ?>
        <div>
            <p><?= htmlspecialchars($user['id_user']) ?> - <?= htmlspecialchars($user['nama']) ?> - <?= htmlspecialchars($user['email']) ?> - <?= htmlspecialchars($user['password']) ?> - <?= htmlspecialchars($user['no_anggota']) ?>
                <a href="/user/edit/<?php echo $user['id_user']; ?>">Edit</a> |
                <a href="/user/delete/<?php echo $user['id_user']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>
</ul>