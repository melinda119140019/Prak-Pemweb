<?php
include 'koneksi.php';

// Mengambil data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kode_prodi = $_POST['kode_prodi'];

// Query untuk insert data
$query = "INSERT INTO mahasiswa (nim, nama, kode_prodi) VALUES ('$nim', '$nama', '$kode_prodi')";
mysqli_query($conn, $query);

header('Location: index.php');
mysqli_close($conn);
?>
