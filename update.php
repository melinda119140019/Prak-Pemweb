<?php
include 'koneksi.php';

// Mengambil data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kode_prodi = $_POST['kode_prodi'];

// Query untuk update data
$query = "UPDATE mahasiswa SET nama='$nama', kode_prodi='$kode_prodi' WHERE nim='$nim'";
mysqli_query($conn, $query);

header('Location: index.php');
mysqli_close($conn);
?>
