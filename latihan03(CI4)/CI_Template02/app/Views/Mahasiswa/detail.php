<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body style='text-align: center;'>
    <h1>Detail Mahasiswa</h1>
    <p><strong>NIM:</strong> <?= $mahasiswa['nim']; ?></p>
    <p><strong>Nama:</strong> <?= $mahasiswa['nama']; ?></p>
    <p><strong>Umur:</strong> <?= $mahasiswa['umur']; ?></p>

    <a href="<?= base_url('mahasiswa'); ?>">Kembali ke Daftar</a>
</body>
</html>
