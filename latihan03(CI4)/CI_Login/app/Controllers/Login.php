<?php
namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index(): string
    {
       $data = [
              'title' => 'Login Page',
              'content' => view('login')
       ];

       return view('template', $data);
    }

    public function auth()
    {
        $session = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // cari user di database
        $user = $userModel->getUser($username);

        if ($user) {
            // cek password
            if ($password === $user['password']) {
                // login sukses → simpan session
                $session->set([
                    'username' => $user['username'],
                    'logged_in' => true
                ]);
                return redirect()->to('/home');
            } else {
                // password salah
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            // user tidak ditemukan
            return redirect()->back()->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
