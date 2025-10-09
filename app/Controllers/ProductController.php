<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    protected $helpers = ['form', 'url'];

    public function index()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Produk');
        echo view('Template/Costumer_Template/footer');
    }

    public function kategori()
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
        echo view('Costumer/Promo');
        echo view('Template/Costumer_Template/footer');
    }

}
