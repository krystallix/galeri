<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Pengguna\Pengguna::index');
$routes->get('/detail/(:num)', 'Pengguna\Pengguna::detailFoto/$1');
$routes->post('/komentar/(:num)/(:num)', 'Pengguna\Pengguna::addComment/$1/$2');
$routes->get('/post', 'Pengguna\Pengguna::tambahFoto');
$routes->post('/postFoto', 'Pengguna\Pengguna::postFoto');
$routes->get('/my-profile', 'Pengguna\Pengguna::myProfile');
$routes->post('/update-profile/(:num)', 'Pengguna\Pengguna::updateProfile/$1');
$routes->delete('/delete/(:num)', 'Pengguna\Pengguna::deleteFoto/$1');
$routes->get('/edit/(:num)', 'Pengguna\Pengguna::edit/$1');
$routes->post('/update/(:num)', 'Pengguna\Pengguna::update/$1');
$routes->get('/edit-profile', 'Pengguna\Pengguna::editProfile');
$routes->get('/profile-user', 'Pengguna\Pengguna::userProfile');


$routes->get('/admin', 'Admin\Admin::index');
$routes->get('/admin/detail/(:num)', 'Admin\Admin::detailFoto/$1');
$routes->delete('/delete-foto-pengguna/(:num)', 'Admin\Admin::deleteFotoPengguna/$1');
$routes->delete('/delete-comment/(:num)/(:num)', 'Admin\Admin::deleteComment/$1/$2');
$routes->get('/admin/post', 'Admin\Admin::postFoto');
$routes->post('/admin/saveFoto', 'Admin\Admin::saveFoto');
$routes->get('/admin/profileUser', 'Admin\Admin::profileUser');
$routes->post('/admin/search', 'Admin\Admin::search');

$routes->get('/admin/pengguna', 'Admin\DataPengguna::index');
$routes->get('/admin/detailPengguna/(:num)', 'Admin\DataPengguna::detail/$1');
$routes->get('/admin/tambahPengguna', 'Admin\DataPengguna::tambahPengguna');
$routes->post('/admin/savePengguna', 'Admin\DataPengguna::savePengguna');
$routes->get('/admin/editPengguna/(:num)', 'Admin\DataPengguna::editPengguna/$1');
$routes->post('/admin/update-pengguna/(:num)', 'Admin\DataPengguna::updatePengguna/$1');
$routes->delete('/admin/deletePengguna/(:num)', 'Admin\DataPengguna::deletePengguna/$1');
$routes->get('/admin/traffic', 'Admin\DataPengguna::traffic');

$routes->get('/admin/profile', 'Admin\ProfileAdmin::index');
$routes->post('/admin/update-profile/(:num)', 'Admin\ProfileAdmin::updateProfile/$1');
$routes->delete('/admin/delete/(:num)', 'Admin\ProfileAdmin::deleteFoto/$1');
$routes->get('/admin/editProfile', 'Admin\ProfileAdmin::editProfile');
$routes->get('/admin/edit/(:num)', 'Admin\ProfileAdmin::edit/$1');
$routes->post('/admin/update/(:num)', 'Admin\ProfileAdmin::updateFoto/$1');

$routes->get('/login', 'Auth::login');
$routes->post('/loginProses', 'Auth::loginProses');
$routes->get('/registrasi', 'Auth::registrasi');
$routes->post('/registrasiProses', 'Auth::registrasiProses');

$routes->get('/logout', 'Auth::logout');


// API 

$routes->get('/detail-foto/(:num)', 'Api\DetailController::showDetail/$1');
$routes->post('/likes', 'Api\LikeController::likes');
$routes->post('/has-liked', 'Api\LikeController::hasLiked');
$routes->post('/comment', 'Api\DetailController::comment');
