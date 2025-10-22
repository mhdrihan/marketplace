<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Route Auth and Profile
$routes->get('/login', 'AuthController::login');
$routes->post('/login/process', 'AuthController::doLogin');
$routes->get('/register', 'AuthController::register');
$routes->post('/register/add', 'AuthController::doRegister');
$routes->get('/register-m', 'AuthController::register_m');
$routes->post('/register-m/add', 'AuthController::doRegister_m');
$routes->get('/Profile', 'CostumerController::Profile');
$routes->get('/logout', 'AuthController::logout');


// Route Costumer
$routes->get('/', 'CostumerController::index');
$routes->get('/notifikasi', 'CostumerController::notifikasi');


// Route Admin
$routes->get('/Dashboard-Admin', 'AdminController::index');
$routes->get('/User', 'AdminController::User');
$routes->post('/User/update/(:num)', 'AdminController::edit_user/$1');
$routes->get('/User/delete/(:num)', 'AdminController::delete_user/$1');
$routes->get('/Produk-A', 'AdminController::produk');
$routes->get('/Kategori-A', 'AdminController::kategori');
$routes->get('/Pesanan-A', 'AdminController::Pesanan');
$routes->get('/Keuangan-A', 'AdminController::Keuangan');
$routes->get('/Promosi-A', 'AdminController::Promosi');
$routes->get('/Sistem-A', 'AdminController::Sistem');


// Route Merchant
$routes->get('/dashboard-m', 'MerchantController::index', ['filter' => 'auth']);
$routes->get('/ulasan', 'MerchantController::ulasan', ['filter' => 'auth']);
$routes->get('/email', 'MerchantController::email', ['filter' => 'auth']);
$routes->get('/produk-m', 'MerchantController::produk', ['filter' => 'auth']);
$routes->get('/order', 'MerchantController::order', ['filter' => 'auth']);
$routes->get('/analisis-p', 'MerchantController::analisisProduk', ['filter' => 'auth']);
$routes->get('/analisis-o', 'MerchantController::analisisOrder', ['filter' => 'auth']);


// Route Product
$routes->get('/kategori', 'ProductController::kategori');
$routes->get('/promo', 'ProductController::promo');
$routes->get('/produk', 'ProductController::index');

// Route Order and Payment
$routes->get('/keranjang', 'OrderController::keranjang');
$routes->get('/pesanan', 'OrderController::pesanan');
$routes->get('/wishlist', 'OrderController::wishlist');