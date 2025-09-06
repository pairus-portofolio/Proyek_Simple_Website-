<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 40px;  
            text-align: center; 
        }

        table { 
            width: 70%; 
            order-collapse: collapse; 
            margin-top: 20px; 
        }
        table, th, td { 
            border: 1px solid #ccc; 
        }

        th, td { 
            padding: 8px; text-align: center; 
        }

        a, button { 
            padding: 5px 10px; 
            text-decoration: none; 
            margin: 2px; 
        }
        
        .btn { background: #4CAF50; color: white; border: none; border-radius: 4px; }
        .btn-danger { background: #f44336; }
        .btn-edit { background: #2196F3; }
    </style>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="/mahasiswa/create" class="btn">+ Tambah Data</a>
    <table align="center">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($mahasiswa as $m): ?>
        <tr>
            <td><?= $m['nim']; ?></td>
            <td><?= $m['nama_lengkap']; ?></td>
            <td><?= $m['jenis_kelamin']; ?></td>
            <td><?= $m['tanggal_lahir']; ?></td>
            <td>
                <a href="/mahasiswa/edit/<?= $m['nim']; ?>" class="btn btn-edit">Edit</a>
                <a href="/mahasiswa/delete/<?= $m['nim']; ?>" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
