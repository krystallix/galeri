<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pengguna\Pengguna::index');
$routes->get('/detail', 'Pengguna\Pengguna::detailFoto');
$routes->get('/tambah', 'Pengguna\Pengguna::tambahFoto');
$routes->post('/postFoto', 'Pengguna\Pengguna::postFoto');
$routes->get('/my-profile', 'Pengguna\Pengguna::myProfile');
$routes->get('/edit', 'Pengguna\Pengguna::edit');
$routes->get('/edit-profile', 'Pengguna\Pengguna::editProfile');
$routes->get('/profile-user', 'Pengguna\Pengguna::userProfile');


$routes->get('/admin', 'Admin\Admin::index');
$routes->get('/admin/detail', 'Admin\Admin::detailFoto');
$routes->get('/admin/post', 'Admin\Admin::postFoto');
$routes->get('/admin/profileUser', 'Admin\Admin::profileUser');

$routes->get('/admin/pengguna', 'Admin\DataPengguna::index');
$routes->get('/admin/detailPengguna', 'Admin\DataPengguna::detail');
$routes->get('/admin/tambahPengguna', 'Admin\DataPengguna::tambahPengguna');
$routes->get('/admin/editPengguna', 'Admin\DataPengguna::editPengguna');

$routes->get('/admin/profile', 'Admin\ProfileAdmin::index');
$routes->get('/admin/editProfile', 'Admin\ProfileAdmin::editProfile');
$routes->get('/admin/edit', 'Admin\ProfileAdmin::edit');

$routes->get('/login', 'Auth::login');
$routes->post('/loginProses', 'Auth::loginProses');
$routes->get('/registrasi', 'Auth::registrasi');
$routes->post('/registrasiProses', 'Auth::registrasiProses');

$routes->get('/logout', 'Auth::logout');
