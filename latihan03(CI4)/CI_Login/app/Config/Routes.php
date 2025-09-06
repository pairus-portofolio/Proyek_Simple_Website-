<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Login::index');             // redirect ke halaman login
$routes->get('login', 'Login::index');         // tampilkan form login
$routes->post('login/auth', 'Login::auth');    // proses login
$routes->get('home', 'Home::index');           // halaman utama
$routes->get('logout', 'Login::logout');       // proses logout
