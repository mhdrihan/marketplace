<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\ShopModel;
use App\Models\AuthModel;
use App\Models\OrderModel;
use App\Models\Order_ItemModel;

class CostumerController extends BaseController
{
    protected $shopModel;
    protected $productModel;
    protected $categoryModel;
    protected $authModel;
    protected $orderModel;
    protected $order_itemModel;
    protected $session;

    protected $helpers = ['form', 'url', 'session'];

    public function __construct()
    {
        $this->shopModel = new ShopModel();
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
        $this->authModel = new AuthModel();
        $this->orderModel = new OrderModel();
        $this->order_itemModel = new Order_ItemModel();
        $this->session = session();
    }

    public function index()
    {
        $data['shops'] = $this->shopModel->findAll();
        $data['products'] = $this->productModel->where('status', 'active')->findAll();
        $data['categories'] = $this->categoryModel->where('status', 'active')->findAll();

        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Dashboard', $data);
        echo view('Template/Costumer_Template/footer');
    }

    public function notifikasi()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Notifikasi');
        echo view('Template/Costumer_Template/footer');
    }

    public function profile()
    {
        $userId = session()->get('user_id');
        $user = $this->authModel->find($userId);

        $data = [
            'title' => 'Profile',
            'user' => $user
        ];

        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Profile', $data);
        echo view('Template/Costumer_Template/footer');
    }

    public function edit_profile($id)
    {
        $validation = \Config\Services::validation();

        $rules = [
            'name' => 'required|min_length[3]',
            'username' => 'required|min_length[3]|is_unique[users.username,user_id,' . $id . ']',
            'email' => 'required|valid_email|is_unique[users.email,user_id,' . $id . ']',
            'phone' => 'required|numeric|min_length[10]|max_length[15]',
            'role' => 'required'
        ];

        $errors = [
            'username' => [
                'required' => 'Username wajib diisi.',
                'min_length' => 'Username minimal 3 karakter.',
                'is_unique' => 'Username sudah digunakan oleh user lain.'
            ],
            'email' => [
                'required' => 'Email wajib diisi.',
                'valid_email' => 'Format email tidak valid.',
                'is_unique' => 'Email sudah terdaftar oleh user lain.'
            ],
            'phone' => [
                'required' => 'Nomor telepon wajib diisi.',
                'numeric' => 'Nomor telepon hanya boleh berisi angka.',
                'min_length' => 'Nomor telepon minimal 10 digit.',
                'max_length' => 'Nomor telepon maksimal 15 digit.'
            ],
            'role' => [
                'required' => 'Role wajib dipilih.'
            ]
        ];

        if (!$this->validate($rules, $errors)) {
            return redirect()->back()->with('error', 'Validasi gagal. Periksa input Anda.');
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'role' => $this->request->getPost('role'),
        ];

        $this->authModel->update($id, $data);

        return redirect()->to('/Profile')->with('success', 'Data user berhasil diperbarui.');
    }

}
