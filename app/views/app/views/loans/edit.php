<!-- app/views/loans/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Peminjaman Buku</title>
</head>
<body>
    <h2>Edit Data Peminjaman Buku</h2>
    <form action="/loans/update/<?php echo $loans['id_loans']; ?>" method="POST">
        <label for="id_loans">ID Loans :</label>
        <input type="INT" id="id_loans" name="id_loans" value="<?php echo $loans['id_loans']; ?>" required>
        <br><br>
        <label for="id_buku">ID Buku :</label>
        <input type="INT" id="id_buku" name="id_buku" value="<?php echo $loans['id_buku']; ?>" required>
        <br><br>
        <label for="id_user">ID User :</label>
        <input type="INT" id="id_user" name="id_user" value="<?php echo $loans['id_user']; ?>" required>
        <br><br>
        <label for="tgl_pinjam">Tanggal Peminjaman :</label>
        <input type="date" id="tgl_pinjam" name="tgl_pinjam" value="<?php echo $loans['tgl_pinjam']; ?>" required>
        <br><br>
        <label for="tgl_kembali">Tanggal Pengembalian :</label>
        <input type="date" id="tgl_kembali" name="tgl_kembali" value="<?php echo $loans['tgl_kembali']; ?>" required>
        <br><br>
        <button type="submit">Update</button>
    </form>
    <a href="/loans/index">Back to List</a>
</body>
</html>