<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\ShopModel;

class ProductController extends BaseController
{
    protected $shopModel;
    protected $productModel;
    protected $categoryModel;
    protected $session;
    protected $helpers = ['form', 'url', 'session'];

    public function __construct()
    {
        $this->shopModel = new ShopModel();
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
        $this->session = session();
    }

    public function index()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Produk');
        echo view('Template/Costumer_Template/footer');
    }

    public function kategori($id)
    {
        $data['shops'] = $this->shopModel->findAll();

        $category = $this->categoryModel->find($id);

        $data['products'] = $this->productModel
            ->where('category_id', $id)
            ->where('status', 'active')
            ->findAll();

        $data['categories'] = $this->categoryModel
            ->where('status', 'active')
            ->findAll();

        $data['selectedCategory'] = $category['name'];

        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Kategori', $data);
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
