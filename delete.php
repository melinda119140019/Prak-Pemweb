<?php
include 'koneksi.php';

$nim = $_GET['nim'];

// delete data
$query = "DELETE FROM mahasiswa WHERE nim='$nim'";
mysqli_query($conn, $query);

header('Location: index.php');
mysqli_close($conn);
?>
