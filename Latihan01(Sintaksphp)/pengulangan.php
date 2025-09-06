<?php
// Program PHP Instruksi Pengulangan

// Contoh array berisi daftar nama
$daftar_nama = array("Andi", "Budi", "Cici", "Dedi", "Eka");

// Menggunakan foreach untuk menampilkan semua nama
echo "Daftar Nama Mahasiswa:<br>";
foreach ($daftar_nama as $nama) {
    echo "- " . $nama . "<br>";
}

// Menggunakan for
echo "<br>Daftar Angka 1 sampai 5:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}
?>
