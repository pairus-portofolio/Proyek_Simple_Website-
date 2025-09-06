<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" cellpadding="10"  style='text-align: center;'>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        <?php if (!empty($mahasiswa)): ?>
            <?php foreach ($mahasiswa as $m): ?>
                <tr>
                    <td><?= esc($m['nim']); ?></td>
                    <td><?= esc($m['nama']); ?></td>
                    <td><?= esc($m['umur']); ?></td>
                    <td>
                        <a href="<?= site_url('Mahasiswa/detail/'.$m['nim']); ?>">Detail</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">Belum ada data mahasiswa</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
