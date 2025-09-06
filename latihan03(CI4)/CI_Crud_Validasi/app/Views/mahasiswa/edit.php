<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 40px;  
            text-align: center; 
            background: #f9f9f9;
        }

        h2 { 
            margin-bottom: 20px; 
            color: #333; 
        }

        form {
            background: #fff;
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            text-align: left;
        }

        p {
            margin-bottom: 10px;
            font-size: 14px;
        }

        input, select {
            width: 100%;
            padding: 8px 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            padding: 8px 14px;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: white;
        }

        .btn-edit { background: #2196F3; }   /* biru untuk Update */
        .btn-danger { background: #f44336; } /* merah untuk Batal */

        .btn:hover { opacity: 0.9; }
    </style>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action="/mahasiswa/update/<?= $mhs['nim']; ?>" method="post">
        <p><b>NIM:</b> <?= $mhs['nim']; ?></p>
        <input type="text" name="nama_lengkap" value="<?= $mhs['nama_lengkap']; ?>" required>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki" <?= ($mhs['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
            <option value="Perempuan" <?= ($mhs['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
        </select>
        <input type="date" name="tanggal_lahir" value="<?= $mhs['tanggal_lahir']; ?>" required>
        <div style="margin-top: 10px;">
            <button type="submit" class="btn btn-edit">Update</button>
            <a href="/mahasiswa" class="btn btn-danger">Batal</a>
        </div>
    </form>
</body>
</html>
