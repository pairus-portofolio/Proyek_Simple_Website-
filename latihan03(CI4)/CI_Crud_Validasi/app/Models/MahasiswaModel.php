<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'biodata_mahasiswa';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nim', 'nama_lengkap', 'jenis_kelamin', 'tanggal_lahir'];
}
