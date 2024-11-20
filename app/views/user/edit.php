<!-- app/views/user/edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Buku</h2>
    <form action="/user/update/<?php echo $BukuController['id_buku']; ?>" method="POST">
        <label for="id_buku">ID Buku:</label><br>
        <input type="number" id="id_buku" name="id_buku" value="<?php echo $BukuController['id_buku']; ?>" required>
        <br>
        <label for="judul_buku">Judul Buku:</label><br>
        <input type="judul_buku" id="judul_buku" name="judul_buku" value="<?php echo $BukuController['judul_buku']; ?>" required>
        <br>
        <label for="pengarang">Pengarang:</label><br>
        <input type="text" id="pengarang" name="pengarang" value="<?php echo $BukuController['pengarang']; ?>" required>
        <br>
        <label for="tahun">Tahun:</label><br>
        <input type="number" id="tahun" name="tahun" value="<?php echo $BukuController['tahun']; ?>" required>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="/user/index">Back to List</a>
</body>
</html>