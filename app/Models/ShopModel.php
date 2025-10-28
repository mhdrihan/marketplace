<?php

namespace App\Models;

use CodeIgniter\Model;


class ShopModel extends Model
{
    protected $table = 'shops';
    protected $primaryKey = 'shop_id';

    protected $allowedFields = [
        'user_id',
        'shop_name',
        'description',
        'address',
        'logo',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
