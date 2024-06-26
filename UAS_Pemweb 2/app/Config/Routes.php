<?php

use CodeIgniter\Router\RouteCollection;

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setAutoRoute(false);
$routes->set404Override();
$routes->setDefaultMethod('index');
/**
 * @var RouteCollection $routes
 */
//home routing halaman utama
$routes->get('/', 'Home::index');
$routes->get('/home/about', 'Home::about');
$routes->get('/home/galeri', 'Home::galeri');
$routes->get('/home/about', 'Home::about');
$routes->get('/home/struktur', 'Home::struktur');
$routes->get('/home/detail/(:any)', 'Home::detail/$1');
$routes->get('/home/kategori/(:any)', 'Home::kategori/$1');


//admin routing admin Login
$routes->get('/admin', 'Admin::login');
$routes->get('/admin/logout', 'Admin::logout');
$routes->post('/admin/auth', 'Admin::auth');
$routes->get('/admin/dashboard', 'Admin::index', ['filter' => 'auth']);

//admin routing admin beranda
$routes->get('/admin/beranda', 'Beranda::beranda', ['filter' => 'auth']);
$routes->get('/admin/add_beranda', 'Beranda::add_beranda', ['filter' => 'auth']);
$routes->post('/admin/save_beranda', 'Beranda::save_beranda');
$routes->get('/admin/edit_beranda/(:num)', 'Beranda::edit_beranda/$1', ['filter' => 'auth']);
$routes->post('/admin/update_beranda/(:num)', 'Beranda::update_beranda/$1');
$routes->delete('/admin/beranda/(:num)', 'Beranda::del_beranda/$1');

//admin routing admin galeri
$routes->get('/admin/galeri', 'Gallery::galeri', ['filter' => 'auth']);
$routes->get('/admin/add_galeri', 'Gallery::add_galeri', ['filter' => 'auth']);
$routes->post('/admin/save_galeri', 'Gallery::save_galeri');
$routes->delete('/admin/galeri/(:num)', 'Gallery::del_galeri/$1', ['filter' => 'auth']);

//admin routing admin aboout
$routes->get('/admin/about', 'About::about', ['filter' => 'auth']);
$routes->get('/admin/add_about', 'About::add_about');
$routes->get('/admin/edit_about/(:num)', 'About::edit_about/$1');
$routes->post('/admin/update_about/(:num)', 'About::update_about/$1');

//admin routing admin user
$routes->get('/admin/user', 'User::user', ['filter' => 'auth']);
$routes->get('/admin/add_user', 'User::add_user', ['filter' => 'auth']);
$routes->post('/admin/save_user', 'User::save_user');
$routes->get('/admin/edit_user/(:num)', 'User::edit_user/$1', ['filter' => 'auth']);
$routes->post('/admin/update_user/(:num)', 'User::update_user/$1', ['filter' => 'auth']);
$routes->delete('/admin/user/(:num)', 'User::del_user/$1', ['filter' => 'auth']);

//admin routing admin setting
$routes->get('/admin/setting', 'Setting::seting', ['filter' => 'auth']);
$routes->get('/admin/edit_setting/(:num)', 'Setting::edit_seting/$1', ['filter' => 'auth']);
$routes->post('/admin/update_setting/(:num)', 'Setting::update_seting/$1', ['filter' => 'auth']);

//admin routing admin kategori
$routes->get('/admin/kategori', 'Kategori::kategori', ['filter' => 'auth']);
$routes->get('/admin/add_kategori', 'Kategori::add_kategori', ['filter' => 'auth']);
$routes->post('/admin/save_kategori', 'Kategori::save_kategori', ['filter' => 'auth']);
$routes->get('/admin/edit_kategori/(:num)', 'Kategori::edit_kategori/$1', ['filter' => 'auth']);
$routes->post('/admin/update_kategori/(:num)', 'Kategori::update_kategori/$1', ['filter' => 'auth']);
$routes->delete('/admin/kategori/(:num)', 'Kategori::del_kategori/$1', ['filter' => 'auth']);

//admin routing admin stryktur
$routes->get('/admin/struktur', 'Struktur::struktur', ['filter' => 'auth']);
$routes->get('/admin/edit_struktur/(:num)', 'Struktur::edit_struktur/$1', ['filter' => 'auth']);
$routes->post('/admin/update_struktur/(:num)', 'Struktur::update_struktur/$1', ['filter' => 'auth']);


//admin routing admin profil
$routes->get('/admin/profil/(:num)', 'Admin::profil/$1', ['filter' => 'auth']);
$routes->get('/admin/edit_profil/(:num)', 'Admin::edit_profil/$1', ['filter' => 'auth']);
$routes->post('/admin/update_profil/(:num)', 'Admin::update_profil/$1', ['filter' => 'auth']);
