<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mKomposisiProduk extends Model
{
    use HasFactory;
    protected $table = 'tb_komposisi_produk';
    protected $guarded = [];
}
