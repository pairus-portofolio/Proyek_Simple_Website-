<?php
include 'service/database.php'; // koneksi

// ambil data dari tabel
$sql = "SELECT * FROM biodata_mahasiswa";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Layout/style.css" rel="stylesheet">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table border="1" align="center" cellpadding="10" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['NIM']."</td>
                        <td>".$row['nama_lengkap']."</td>
                        <td>".$row['jenis_kelamin']."</td>
                        <td>".$row['tanggal_lahir']."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Data kosong</td></tr>";
        }
        ?>
    </table>

    <a href="form.php" class="tabel">Kembali ke Form</a>
    
</body>
</html>
