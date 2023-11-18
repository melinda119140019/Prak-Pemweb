<?php
include 'koneksi.php';

// Query untuk menampilkan data mahasiswa
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($conn, $query);

// Menampilkan data dalam tabel
echo "<table border='1'>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kode Prodi</th>
            <th>Pilihan</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['nim']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['kode_prodi']}</td>
            <td>
                <a href='edit.php?nim={$row['nim']}'>Update</a>
                <a href='delete.php?nim={$row['nim']}'>Delete</a>
            </td>
          </tr>";
}

echo "</table>";

mysqli_close($conn);
?>
