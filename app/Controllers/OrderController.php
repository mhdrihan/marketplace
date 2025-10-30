<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\ShopModel;
use App\Models\AuthModel;
use App\Models\OrderModel;
use App\Models\Order_ItemModel;


class OrderController extends BaseController
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
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Kategori');
        echo view('Template/Costumer_Template/footer');
    }

    public function promo()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/promo');
        echo view('Template/Costumer_Template/footer');
    }

    public function pesanan()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Pesanan');
        echo view('Template/Costumer_Template/footer');
    }

    public function wishlist()
    {
        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Wishlist');
        echo view('Template/Costumer_Template/footer');
    }

    public function keranjang()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];
        log_message('debug', 'SESSION ID: ' . session_id());
        log_message('debug', 'SESSION DATA: ' . json_encode($_SESSION));

        echo view('Template/Costumer_Template/header');
        echo view('Template/Costumer_Template/navbar');
        echo view('Costumer/Keranjang', ['cart' => $cart]);
        echo view('Template/Costumer_Template/footer');
    }

    public function add_cart()
    {
        $session = session();

        $product_id = $this->request->getPost('product_id');
        $name = $this->request->getPost('name');
        $price = $this->request->getPost('price');
        $image_url = $this->request->getPost('image_url');

        $cart = $session->get('cart') ?? [];

        if (isset($cart[$product_id])) {
            $cart[$product_id]['quantity']++;
        } else {
            $cart[$product_id] = [
                'product_id' => $product_id,
                'name' => $name,
                'price' => $price,
                'image_url' => $image_url,
                'quantity' => 1,
            ];
        }

        $session->set('cart', $cart);
        log_message('debug', 'CART UPDATED: ' . json_encode($session->get('cart')));

        return $this->response->setJSON(['success' => true]);
    }


    public function remove_cart_item($id)
    {
        $cart = session()->get('cart') ?? [];
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->set('cart', $cart);
        }
        return redirect()->back();
    }

    public function update_cart()
    {
        $session = session();

        if ($this->request->isAJAX()) {
            $productId = (string) $this->request->getPost('product_id'); // pastikan string
            $quantity = max(1, (int) $this->request->getPost('quantity'));

            $cart = $session->get('cart') ?? [];

            // Logging sebelum update
            log_message('debug', 'CART BEFORE UPDATE: ' . json_encode($cart));

            if (!isset($cart[$productId])) {
                return $this->response->setJSON([
                    'status' => 'error',
                    'message' => 'Produk tidak ditemukan di cart'
                ]);
            }

            // Update quantity dan subtotal
            $cart[$productId]['quantity'] = $quantity;
            $cart[$productId]['subtotal'] = floatval($cart[$productId]['price']) * $quantity;

            // Simpan session
            $session->set('cart', $cart);

            // Logging setelah update
            log_message('debug', 'CART AFTER UPDATE: ' . json_encode($session->get('cart')));

            // Hitung total
            $total = array_sum(array_map(fn($i) => floatval($i['price']) * $i['quantity'], $cart));

            return $this->response->setJSON([
                'status' => 'success',
                'productSubtotal' => number_format($cart[$productId]['subtotal'], 0, ',', '.'),
                'totalCart' => number_format($total, 0, ',', '.'),
                'totalWithShipping' => number_format($total + 20000, 0, ',', '.') // contoh ongkir
            ]);
        }

        return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request']);
    }

}
