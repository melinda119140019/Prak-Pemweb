<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Mahasiswa</h2>

    <?php
    include 'koneksi.php';

    $nim = $_GET['nim'];

    //mendapatkan data mahasiswa berdasarkan NIM
    $query = "SELECT * FROM mahasiswa WHERE nim='$nim'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
    ?>

    <form action="update.php" method="POST">
        <input type="hidden" name="nim" value="<?php echo $data['nim']; ?>">
        Nama: <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
        Kode Prodi: <input type="text" name="kode_prodi" value="<?php echo $data['kode_prodi']; ?>"><br>
        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
