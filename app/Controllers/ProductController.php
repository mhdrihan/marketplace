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
    }

    public function kategori()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Kategori');
    }

    public function promo()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Promo');
    }

}
