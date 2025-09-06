<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
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

        .btn-success { background: #4CAF50; }
        .btn-danger { background: #f44336; }

        .btn:hover { opacity: 0.9; }

        .error {
            color: red;
            font-size: 14px;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>

    <form action="/mahasiswa/store" method="post">
        <label>NIM</label>
        <input type="text" name="nim" value="<?= old('nim') ?>" placeholder="NIM" required>
        <?php if(isset($validation) && $validation->hasError('nim')): ?>
            <div class="error"><?= $validation->getError('nim') ?></div>
        <?php endif; ?>

        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" value="<?= old('nama_lengkap') ?>" placeholder="Nama Lengkap" required>

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" required>
            <option value="">--Jenis Kelamin--</option>
            <option value="Laki-laki" <?= old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="Perempuan" <?= old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select>

        <label>Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="<?= old('tanggal_lahir') ?>" required>

        <div style="margin-top: 15px;">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/mahasiswa" class="btn btn-danger">Batal</a>
        </div>
    </form>
</body>
</html>
