<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
        if (!$session->get('logged_in')) {
            $session->setFlashdata('error', 'Anda harus login terlebih dahulu!');
            return redirect()->to('/login');
        }
        log_message('debug', 'AuthFilter: Sudah login');
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}
