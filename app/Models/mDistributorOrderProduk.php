<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mDistributorOrderProduk extends Model
{
    use HasFactory;
    protected $table = 'tb_distributor_order_produk';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
