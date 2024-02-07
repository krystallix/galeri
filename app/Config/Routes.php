<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pengguna\Pengguna::index');
$routes->get('/detail', 'Pengguna\Pengguna::detailFoto');
$routes->get('/tambah', 'Pengguna\Pengguna::tambahFoto');
$routes->get('/my-profile', 'Pengguna\Pengguna::myProfile');
$routes->get('/edit', 'Pengguna\Pengguna::edit');
$routes->get('/edit-profile', 'Pengguna\Pengguna::editProfile');
