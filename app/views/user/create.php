<!-- app/views/user/create.php -->
<h2>Tambah Daftar Buku</h2>
<form action="/user/store" method="POST">
    <label for="judul_buku">Judul Buku:</label><br>
    <input type="text" name="judul_buku" id="judul_buku" required><br>
    <label for="pengarang">Pengarang:</label><br>
    <input type="text" name="pengarang" id="pengarang" required><br>
    <label for="tahun">Tahun:</label><br>
    <input type="int" name="tahun" id="tahun" required><br>
    <button type="submit">Simpan</button>
</form>

