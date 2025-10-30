<?php

namespace App\Models;

use CodeIgniter\Model;


class OrderModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'order_id';

    protected $allowedFields = [
        'user_id',
        'total_amount',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
