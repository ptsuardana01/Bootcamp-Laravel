<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mStokProduk extends Model
{
    use HasFactory;
    protected $table = 'tb_stok_produk';
    protected $guarded = [];
}
