<?php
include 'koneksi.php';

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];

    // cari data mahasiswa berdasarkan kode prodi
    $query = "SELECT * FROM mahasiswa WHERE kode_prodi LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<h2>Hasil Pencarian</h2>";

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kode Prodi</th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['nim']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['kode_prodi']}</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "Gaada Kode Prodi '$keyword' wak.";
        }
    }
}
mysqli_close($conn);
?>