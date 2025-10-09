<?php

namespace App\Controllers;

class OrderController extends BaseController
{
    protected $helpers = ['form', 'url'];

    public function index()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Kategori');
    }

    public function promo()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/promo');
    }

    public function pesanan()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Pesanan');
    }

    public function wishlist()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Wishlist');
    }

    public function keranjang()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Keranjang');

    }
}
