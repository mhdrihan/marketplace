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
$routes->get('/Profile', 'AuthController::Profile');


// Route Costumer
$routes->get('/', 'CostumerController::index');
$routes->get('/notifikasi', 'CostumerController::notifikasi');


// Route Admin
$routes->get('/Dashboard-Admin', 'AdminController::index');
$routes->get('/User', 'AdminController::User');
$routes->get('/Produk-A', 'AdminController::produk');
$routes->get('/Kategori-A', 'AdminController::kategori');
$routes->get('/Pesanan-A', 'AdminController::Pesanan');
$routes->get('/Keuangan-A', 'AdminController::Keuangan');
$routes->get('/Promosi-A', 'AdminController::Promosi');


// Route Merchant
$routes->get('/dashboard-m', 'MerchantController::index');
$routes->get('/ulasan', 'MerchantController::ulasan');
$routes->get('/email', 'MerchantController::email');
$routes->get('/produk-m', 'MerchantController::produk');
$routes->get('/order', 'MerchantController::order');
$routes->get('/analisis-p', 'MerchantController::analisisProduk');
$routes->get('/analisis-o', 'MerchantController::analisisOrder');


// Route Product
$routes->get('/kategori', 'ProductController::kategori');
$routes->get('/promo', 'ProductController::promo');
$routes->get('/produk', 'ProductController::index');

// Route Order and Payment
$routes->get('/keranjang', 'OrderController::keranjang');
$routes->get('/pesanan', 'OrderController::pesanan');
$routes->get('/wishlist', 'OrderController::wishlist');