<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function display()
    {
        $mode = new MahasiswaModel();
        $data['mahasiswa'] = $mode->getMahasiswa();

        return view('Mahasiswa/mahasiswa',$data); // ini sudah benar
    }

    public function detail($nim)
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->getMahasiswaByNim($nim);

        return view('Mahasiswa/detail', $data);
    }
}
