<?php
namespace App\Models;
use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';   // nama tabel
    protected $primaryKey = 'nim';    // primary key
    protected $allowedFields = ['nim', 'nama', 'umur'];

    public function getMahasiswa()
    {
        return $this->findAll(); // CI4 sudah punya ini bawaan
    }

    public function getMahasiswaByNim($nim)
    {
        return $this->where(['nim' => $nim])->first(); 
        // CI4: ambil 1 baris berdasarkan NIM
    }
}
