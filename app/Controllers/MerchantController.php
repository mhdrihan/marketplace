<?php

namespace App\Controllers;
use App\Models\ShopModel;
use App\Models\ProductModel;
use App\Models\CategoryModel;

class MerchantController extends BaseController
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

        if (!$shop) {
            session()->setFlashdata('error', 'Anda belum memiliki toko. Silakan buat toko terlebih dahulu.');
            return redirect()->to(base_url('dashboard-m'));
        }

        $products = $this->productModel->where('shop_id', $shop['shop_id'])->findAll();

        $data = [
            'shop' => $shop,
            'products' => $products,
            'categories' => $this->categoryModel->findAll()
        ];

        echo view('Template/Merchant_Template/header', $data);
        echo view('Template/Merchant_Template/navbar', $data);
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

    public function add_product()
    {
        $userId = session()->get('user_id');
        $shop = $this->shopModel->where('user_id', $userId)->first();

        if (!$shop) {
            return redirect()->back()->with('error', 'Toko tidak ditemukan.');
        }

        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]',
            'description' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'category_id' => 'required|integer',
            'image_url' => 'uploaded[image_url]|is_image[image_url]|mime_in[image_url,image/jpg,image/jpeg,image/png]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->with('errors', $validation->getErrors());
        }

        $image = $this->request->getFile('image_url');
        $newName = $image->getRandomName();
        $image->move(ROOTPATH . 'public/uploads/products', $newName);

        $this->productModel->save([
            'shop_id' => $shop['shop_id'],
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
            'category_id' => $this->request->getPost('category_id'),
            'image_url' => $newName,
            'status' => 'active'
        ]);

        return redirect()->to('/produk-m')->with('success', 'Produk berhasil ditambahkan!');
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
