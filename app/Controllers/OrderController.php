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
        echo view('Template/Costumer_Template/footer');
    }

    public function promo()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/promo');
        echo view('Template/Costumer_Template/footer');
    }

    public function pesanan()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Pesanan');
        echo view('Template/Costumer_Template/footer');
    }

    public function wishlist()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Wishlist');
        echo view('Template/Costumer_Template/footer');
    }

    public function keranjang()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Keranjang');
        echo view('Template/Costumer_Template/footer');

    }
}
