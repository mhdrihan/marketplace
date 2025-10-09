<?php

namespace App\Controllers;

class MerchantController extends BaseController
{
    public function index()
    {
        echo view('Template/Merchant_Template/header');
        echo view('Template/Merchant_Template/navbar');
        echo view('Merchant/Index', );
        echo view('Template/Merchant_Template/footer');
    }

    public function ulasan()
    {
        echo view('Template/Merchant_Template/header');
        echo view('Template/Merchant_Template/navbar');
        echo view('Merchant/Ulasan', );
        echo view('Template/Merchant_Template/footer');
    }

    public function email()
    {
        echo view('Template/Merchant_Template/header');
        echo view('Template/Merchant_Template/navbar');
        echo view('Merchant/Email', );
        echo view('Template/Merchant_Template/footer');
    }

    public function produk()
    {
        echo view('Template/Merchant_Template/header');
        echo view('Template/Merchant_Template/navbar');
        echo view('Merchant/Produk', );
        echo view('Template/Merchant_Template/footer');
    }

    public function order()
    {
        echo view('Template/Merchant_Template/header');
        echo view('Template/Merchant_Template/navbar');
        echo view('Merchant/Order', );
        echo view('Template/Merchant_Template/footer');
    }

    public function analisisProduk()
    {
        echo view('Template/Merchant_Template/header');
        echo view('Template/Merchant_Template/navbar');
        echo view('Merchant/Analisis-Produk', );
        echo view('Template/Merchant_Template/footer');
    }

    public function analisisOrder()
    {
        echo view('Template/Merchant_Template/header');
        echo view('Template/Merchant_Template/navbar');
        echo view('Merchant/Analisis-Order', );
        echo view('Template/Merchant_Template/footer');
    }

}
