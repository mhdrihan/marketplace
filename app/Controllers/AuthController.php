<?php

namespace App\Controllers;
use App\Models\AuthModel;


class AuthController extends BaseController
{
    protected $authModel;
    protected $session;

    protected $helpers = ['form', 'url', 'session'];

    public function __construct()
    {
        $this->authModel = new AuthModel();
        $this->session = session();
    }
    public function login()
    {
        $data['title'] = 'Login';

        echo view('Auth/Login', $data);
    }

    public function register()
    {
        $data['title'] = 'Register';

        echo view('Auth/Register', $data);

    }

    public function register_m()
    {
        $data['title'] = 'Register Merchant';

        echo view('Auth/Register-M', $data);
    }

    public function doLogin()
    {
        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->authModel
            ->where('username', $username)
            ->orWhere('email', $username)
            ->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Akun tidak ditemukan!');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah!');
        }

        $session->set([
            'user_id' => $user['user_id'],
            'name' => $user['name'],
            'username' => $user['username'],
            'email' => $user['email'],
            'role' => $user['role'],
            'logged_in' => true
        ]);
        log_message('debug', 'Session setelah login: ' . json_encode($session->get()));

        if ($user['role'] == 'buyer') {
            return redirect()->to('/')->with('success', 'Selamat Berbelanja');
        } elseif ($user['role'] == 'seller') {
            return redirect()->to('/dashboard-m');
        } else {
            return redirect()->to('/Dashboard-Admin');
        }
    }



    public function doRegister()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'name' => 'required|min_length[3]',
            'username' => 'required|min_length[3]|is_unique[users.username]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'phone' => 'required|numeric|min_length[10]|max_length[15]',
            'password' => 'required|min_length[6]',
            'password_confirm' => 'required|matches[password]',
        ];

        $errors = [
            'username' => [
                'is_unique' => 'Username sudah digunakan.'
            ],
            'email' => [
                'is_unique' => 'Email sudah terdaftar.'
            ],
            'password_confirm' => [
                'matches' => 'Konfirmasi password tidak cocok.'
            ],
            'phone' => [
                'matches' => 'Konfirmasi password tidak cocok.'
            ]
        ];

        if (!$this->validate($rules, $errors)) {
            return redirect()->back()->withInput()->with('error', implode(', ', $validation->getErrors()));
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'buyer',
        ];

        $this->authModel->insert($data);

        return redirect()->to('/login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }

    public function doRegister_m()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'name' => 'required|min_length[3]',
            'username' => 'required|min_length[3]|is_unique[users.username]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'phone' => 'required|numeric|min_length[10]|max_length[15]',
            'password' => 'required|min_length[6]',
            'password_confirm' => 'required|matches[password]',
        ];

        $errors = [
            'username' => [
                'is_unique' => 'Username sudah digunakan.'
            ],
            'email' => [
                'is_unique' => 'Email sudah terdaftar.'
            ],
            'password_confirm' => [
                'matches' => 'Konfirmasi password tidak cocok.'
            ],
            'phone' => [
                'matches' => 'Konfirmasi password tidak cocok.'
            ]
        ];

        if (!$this->validate($rules, $errors)) {
            return redirect()->back()->withInput()->with('error', implode(', ', $validation->getErrors()));
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'seller',
        ];

        $this->authModel->insert($data);

        return redirect()->to('/login')->with('success', 'Akun berhasil dibuat! Silakan login.');
    }

    public function logout()
    {
        $session = session();

        $session->destroy();

        return redirect()->to('/login')->with('success', 'Anda telah logout.');
    }
}