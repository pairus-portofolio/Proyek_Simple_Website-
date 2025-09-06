<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function display()
    {
        $mode = new MahasiswaModel();
        $data['mahasiswa'] = $mode->getMahasiswa();

        return view('Mahasiswa/display_mahasiswa', $data); //kembalikan sebagai array
    }
}