<!-- app/views/user/create.php -->
<h2>Tambah Pengguna Baru</h2>
<form action="/user/store" method="POST">
    <label for="name">Nama:</label><br>
    <input type="text" name="nama" id="nama" required><br>

    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" required><br>

    <label for="password">Password:</label><br>
    <input type="text" name="password" id="password" required><br>

    <label for="no_anggota">No Anggota:</label><br>
    <input type="number" name="no_anggota" id="no_anggota" required><br>

    <button type="submit">Simpan</button>
</form>