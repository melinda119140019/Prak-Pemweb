<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="add.php">Tambah Mahasiswa</a>
    <br><br>

    <!-- Form Pencarian -->
    <form action="search.php" method="GET">
        <input type="text" name="keyword" placeholder="Cari">
        <button type="submit">Search</button>
    </form>

    <?php
        // Menampilkan data mahasiswa
        include 'tampil.php';
    ?>
</body>
</html>
