<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class SellerFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        if (!$session->get('logged_in')) {
            $session->setFlashdata('error', 'Anda harus login terlebih dahulu!');
            return redirect()->to('/login');
        }

        if ($session->get('role') !== 'seller') {
            $session->setFlashdata('error', 'Anda tidak memiliki akses ke halaman ini.');
            return redirect()->to('/'); // arahkan ke home atau halaman lain
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // tidak perlu
    }
}
