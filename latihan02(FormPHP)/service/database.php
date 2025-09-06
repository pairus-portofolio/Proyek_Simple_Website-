<?php
$host = "localhost";   // biasanya localhost
$user = "root";        // default XAMPP root
$pass = "";            // default kosong (kalau tidak pakai password)
$dbname = "#2database"; // ganti dengan nama database kamu

// buat koneksi
$db = new mysqli($host, $user, $pass, $dbname);

// cek koneksi
if ($db->connect_error) {
    die("Koneksi gagal: " . $db->connect_error);
}
?>
