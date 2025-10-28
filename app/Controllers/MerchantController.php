<?php

namespace App\Controllers;
use App\Models\ShopModel;
use App\Models\ProductModel;

class MerchantController extends BaseController
{
    protected $shopModel;
    protected $productModel;
    protected $session;

    protected $helpers = ['form', 'url', 'session'];

    public function __construct()
    {
        $this->shopModel = new ShopModel();
        $this->productModel = new ProductModel();
        $this->session = session();
    }

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
        $userId = session()->get('user_id');
        $shop = $this->shopModel->where('user_id', $userId)->first();

        $products = [];
        if ($shop) {
            $products = $this->productModel->where('shop_id', $shop['shop_id'])->findAll();
        }

        $data = [
            'shop' => $shop,
            'product' => $products
        ];

        echo view('Template/Merchant_Template/header');
        echo view('Template/Merchant_Template/navbar');
        echo view('Merchant/Produk', $data);
        echo view('Template/Merchant_Template/footer');
    }

    public function add_shop()
    {
        $user_id = $this->session->get('user_id');

        $data = [
            'user_id' => $user_id,
            'shop_name' => $this->request->getPost('shop_name'),
            'description' => $this->request->getPost('description'),
            'address' => $this->request->getPost('address'),
            'status' => 'active',
        ];

        $logo = $this->request->getFile('logo');
        if ($logo && $logo->isValid() && !$logo->hasMoved()) {
            $newName = $logo->getRandomName();

            $uploadPath = FCPATH . 'uploads/shops';
            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }

            $logo->move($uploadPath, $newName);
            $data['logo'] = $newName;
        }

        if ($this->shopModel->insert($data)) {
            return redirect()->to('/produk-m')->with('success', 'Toko berhasil ditambahkan!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan toko.');
        }
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
