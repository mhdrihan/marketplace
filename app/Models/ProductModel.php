<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id'; // karena pk nya product_id

    protected $allowedFields = [
        'shop_id',
        'name',
        'description',
        'price',
        'stock',
        'category_id',
        'image_url',
        'status',
        'created_at',
        'updated_at'
    ];

    // Optional: kalau ada created_at & updated_at otomatis
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
