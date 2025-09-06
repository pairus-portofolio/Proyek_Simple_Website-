<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswa;

    public function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }

    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswa->findAll();
        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        return view('mahasiswa/create');
    }
    public function store()
    {
    $validation = \Config\Services::validation();
    $rules = [
        'nim' => [
            'rules'  => 'required|is_unique[biodata_mahasiswa.nim]',
            'errors' => [
                'required'  => 'NIM wajib diisi!',
                'is_unique' => 'NIM sudah terdaftar!'
            ]
        ]
    ];
    
    if (! $this->validate($rules)) {
        return view('mahasiswa/create', [
            'validation' => $this->validator
        ]);
    }

    $this->mahasiswa->insert([
        'nim'           => $this->request->getPost('nim'),
        'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
        'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
    ]);

    return redirect()->to('/mahasiswa');
    }



    public function edit($nim)
    {
        $data['mhs'] = $this->mahasiswa->find($nim);
        return view('mahasiswa/edit', $data);
    }

    public function update($nim)
    {
        $this->mahasiswa->update($nim, [
            'nama_lengkap'   => $this->request->getPost('nama_lengkap'),
            'jenis_kelamin'  => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir'  => $this->request->getPost('tanggal_lahir'),
        ]);
        return redirect()->to('/mahasiswa');
    }

    public function delete($nim)
    {
        $this->mahasiswa->delete($nim);
        return redirect()->to('/mahasiswa');
    }
}
