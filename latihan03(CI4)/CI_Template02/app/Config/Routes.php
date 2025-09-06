<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/mahasiswa', 'Mahasiswa::display');
$routes->get('Mahasiswa/detail/(:any)', 'Mahasiswa::detail/$1');