<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function display()
{
    $model = new MahasiswaModel();
    $mahasiswa = $model->getMahasiswa();

    $data = [
        'title'   => 'Mahasiswa',
        'content' => view('Mahasiswa/mahasiswa', ['mahasiswa' => $mahasiswa])
    ];

    return view('template', $data);
}


    public function detail($nim)
    {
    $model = new MahasiswaModel();
    $mahasiswa = $model->getMahasiswaByNim($nim);

    $data = [
        'title'   => 'Detail Mahasiswa',
        'content' => view('Mahasiswa/detail', ['mahasiswa' => $mahasiswa])
    ];

    return view('template', $data);
    }

}
