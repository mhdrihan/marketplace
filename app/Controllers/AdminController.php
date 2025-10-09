<?php

namespace App\Controllers;
use App\Models\AuthModel;

class AdminController extends BaseController
{
    protected $authModel;
    protected $session;

    protected $helpers = ['form', 'url', 'session'];

    public function __construct()
    {
        $this->authModel = new AuthModel();
        $this->session = session();
    }

    public function index()
    {
        echo view('Template/Admin_Template/header');
        echo view('Template/Admin_Template/navbar');
        echo view('Template/Admin_Template/sidebar');
        echo view('Admin/Dashboard-Admin');
        echo view('Template/Admin_Template/footer');
    }

    public function User()
    {
        $authModel = new AuthModel();
        $data['users'] = $authModel->findAll();

        echo view('Template/Admin_Template/header');
        echo view('Template/Admin_Template/navbar');
        echo view('Template/Admin_Template/sidebar');
        echo view('Admin/User', $data);
        echo view('Template/Admin_Template/footer');
    }

    public function Produk()
    {
        echo view('Template/Admin_Template/header');
        echo view('Template/Admin_Template/navbar');
        echo view('Template/Admin_Template/sidebar');
        echo view('Admin/Manajemen-Produk');
        echo view('Template/Admin_Template/footer');
    }

    public function Kategori()
    {
        echo view('Template/Admin_Template/header');
        echo view('Template/Admin_Template/navbar');
        echo view('Template/Admin_Template/sidebar');
        echo view('Admin/Manajemen-Kategori');
        echo view('Template/Admin_Template/footer');
    }

    public function Pesanan()
    {
        echo view('Template/Admin_Template/header');
        echo view('Template/Admin_Template/navbar');
        echo view('Template/Admin_Template/sidebar');
        echo view('Admin/Manajemen-Pesanan');
        echo view('Template/Admin_Template/footer');
    }

    public function Keuangan()
    {
        echo view('Template/Admin_Template/header');
        echo view('Template/Admin_Template/navbar');
        echo view('Template/Admin_Template/sidebar');
        echo view('Admin/Manajemen-Keuangan');
        echo view('Template/Admin_Template/footer');
    }

    public function Promosi()
    {
        echo view('Template/Admin_Template/header');
        echo view('Template/Admin_Template/navbar');
        echo view('Template/Admin_Template/sidebar');
        echo view('Admin/Pengaturan-Promosi');
        echo view('Template/Admin_Template/footer');
    }
}
