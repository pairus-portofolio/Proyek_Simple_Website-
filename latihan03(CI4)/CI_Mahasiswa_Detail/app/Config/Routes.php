<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// daftar mahasiswa
$routes->get('Mahasiswa', 'Mahasiswa::display');

// detail mahasiswa berdasarkan nim
$routes->get('Mahasiswa/detail/(:any)', 'Mahasiswa::detail/$1');
