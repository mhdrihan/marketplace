<?php

namespace App\Controllers;
use App\Models\AuthModel;
use App\Models\CategoryModel;

class AdminController extends BaseController
{
    protected $authModel;
    protected $categoryModel;
    protected $session;

    protected $helpers = ['form', 'url', 'session'];

    public function __construct()
    {
        $this->authModel = new AuthModel();
        $this->categoryModel = new CategoryModel();
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

    public function edit_user($id)
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

        return redirect()->to('/User')->with('success', 'Data user berhasil diperbarui.');
    }

    public function delete_user($id)
    {
        $user = $this->authModel->find($id);

        if (!$user) {
            return redirect()->to('/User')->with('error', 'User tidak ditemukan.');
        }

        $this->authModel->delete($id);

        return redirect()->to('/User')->with('success', 'User berhasil dihapus.');
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
        $data['categories'] = $this->categoryModel->findAll();

        echo view('Template/Admin_Template/header');
        echo view('Template/Admin_Template/navbar');
        echo view('Template/Admin_Template/sidebar');
        echo view('Admin/Manajemen-Kategori', $data);
        echo view('Template/Admin_Template/footer');
    }

    public function add_Kategori()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'status' => 'active',
        ];

        if (empty($data['name'])) {
            return redirect()->back()->withInput()->with('error', 'Nama kategori harus diisi.');
        }

        if ($this->categoryModel->insert($data)) {
            return redirect()->to('/Kategori-A')->with('success', 'Kategori berhasil ditambahkan!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menambahkan kategori.');
        }
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

    public function Sistem()
    {
        echo view('Template/Admin_Template/header');
        echo view('Template/Admin_Template/navbar');
        echo view('Template/Admin_Template/sidebar');
        echo view('Admin/Pengaturan-Sistem');
        echo view('Template/Admin_Template/footer');
    }
}
