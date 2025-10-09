<?php

namespace App\Controllers;

class CostumerController extends BaseController
{
    protected $helpers = ['form', 'url'];

    public function index()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Dashboard', );
        echo view('Template/Costumer_Template/footer');
    }

    public function kategori()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Kategori');
        echo view('Template/Costumer_Template/footer');
    }

    public function notifikasi()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Notifikasi');
        echo view('Template/Costumer_Template/footer');
    }
}
