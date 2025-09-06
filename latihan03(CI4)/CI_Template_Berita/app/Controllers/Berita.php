<?php

namespace App\Controllers;

class Berita extends BaseController
{
    public function index(): string
    {
       $data = [
              'title' => 'Berita Page',
              'content' => view('berita')
       ];

       return view('template', $data);
    }
}
