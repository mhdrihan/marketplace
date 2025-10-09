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
    }

    public function kategori()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Kategori');
    }

    public function notifikasi()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Notifikasi');
    }
}
