<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ======================================================
// FRONTEND
// ======================================================

$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');

// ======================================================
// AUTHENTICATION
// ======================================================

$routes->group('', function ($routes) {

    // Login
    $routes->get('login', 'Auth::login');
    $routes->post('login/proses', 'Auth::prosesLogin');

    // Lupa Password
    $routes->get('lupa-password', 'Auth::forgotPassword');
    $routes->post('lupa-password', 'Auth::sendResetLink');

    $routes->get('reset-password/(:any)', 'Auth::resetPassword/$1');
    $routes->post('reset-password', 'Auth::updatePassword');

    // Register
    $routes->get('register', 'Auth::register');
    $routes->post('register/simpan', 'Auth::simpanRegister');

    // Logout
    $routes->get('logout', 'Auth::logout');
});

// ======================================================
// DASHBOARD ADMIN
// ======================================================

$routes->get('dashboard', 'Dashboard::index');

// ======================================================
// DATA LATIHAN
// ======================================================

$routes->group('latihan', function ($routes) {

    $routes->get('/', 'Latihan::index');
    $routes->get('tambah', 'Latihan::tambah');
    $routes->post('simpan', 'Latihan::simpan');

    $routes->get('edit/(:num)', 'Latihan::edit/$1');
    $routes->post('update/(:num)', 'Latihan::update/$1');

    $routes->get('hapus/(:num)', 'Latihan::hapus/$1');
});

// ======================================================
// RULE DECISION TREE
// ======================================================

$routes->group('rule', function ($routes) {

    $routes->get('/', 'Rule::index');

    $routes->get('create', 'Rule::create');
    $routes->post('store', 'Rule::store');

    $routes->get('edit/(:num)', 'Rule::edit/$1');
    $routes->post('update/(:num)', 'Rule::update/$1');

    $routes->get('delete/(:num)', 'Rule::delete/$1');
});

// ======================================================
// KELOLA USER
// ======================================================

$routes->group('user', function ($routes) {

    $routes->get('/', 'User::index');

    $routes->get('tambah', 'User::tambah');
    $routes->post('simpan', 'User::simpan');

    $routes->get('edit/(:num)', 'User::edit/$1');
    $routes->post('update/(:num)', 'User::update/$1');

    $routes->get('hapus/(:num)', 'User::hapus/$1');
});
/*
|--------------------------------------------------------------------------
| MEMBER
|--------------------------------------------------------------------------
*/

$routes->group('member', function ($routes) {

    $routes->get('/', 'Member::index');

    $routes->get('rekomendasi', 'Member::rekomendasi');

    $routes->post('proses', 'Member::proses');

    $routes->get('riwayat', 'Member::riwayat');

    // Detail Riwayat
    $routes->get('detail/(:num)', 'Member::detail/$1');

    // Hapus Riwayat
    $routes->get('hapus/(:num)', 'Member::hapus/$1');

});
// ======================================================
// KELOLA RIWAYAT
// ======================================================

$routes->group('riwayat', function ($routes) {

    $routes->get('/', 'Riwayat::index');

    $routes->get('detail/(:num)', 'Riwayat::detail/$1');

    $routes->get('hapus/(:num)', 'Riwayat::hapus/$1');

});
// ======================================================
// REKOMENDASI LATIHAN
// ======================================================

$routes->group('rekomendasi', function ($routes) {

    $routes->get('/', 'Rekomendasi::index');
    $routes->post('hasil', 'Rekomendasi::hasil');
});