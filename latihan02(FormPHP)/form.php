<?php
include 'service/database.php'; // koneksi

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $tanggal = $_POST['tanggal'];
    

    // query insert ke tabel mahasiswa
    $sql = "INSERT INTO biodata_mahasiswa (NIM, nama_lengkap, jenis_kelamin, tanggal_lahir) 
        VALUES ('$nim', '$nama', '$jk', '$tanggal')";

    if ($db->query($sql)) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $db->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Layout/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<?php include 'layout/header.html'; ?>

    <div class="form-container">
        <form action="form.php" method="POST">

        <input type="text" name="nim" placeholder="NIM" required><br>

        <input type="text" name="nama" placeholder="Nama Lengkap" required><br>

        <input type="date" name="tanggal" required><br>

        <select name="jenis_kelamin" id="jk" required>

        <option value="">--Jenis Kelamin--</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
        </select><br>

        <button type="submit" name="submit">Submit</button>
    </form>
    </div>

    <a href="tabel.php" class="tabel">Lihat Data</a>

    <?php include 'layout/footer.html'; ?>

</body>
</html>