<!-- app/views/loans/create.php -->
<h2>Form Tambah Data Peminjaman Buku</h2>
<form action="/loans/store" method="POST">
    <label for="id_buku">ID Buku :</label>
    <input type="INT" name="id_buku" id="id_buku" required>
    <br><br>
    <label for="id_user">ID User :</label>
    <input type="INT" name="id_user" id="id_user" required>
    <br><br>
    <label for="tgl_pinjam">Tanggal Peminjaman :</label>
    <input type="date" name="tgl_pinjam" id="tgl_pinjam" required>
    <br><br>
    <label for="tgl_kembali">Tanggal Pengembalian :</label>
    <input type="date" name="tgl_kembali" id="tgl_kembali" required>
    <br><br>
    <button type="submit">Simpan</button>
</form>
