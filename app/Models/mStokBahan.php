<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mStokBahan extends Model
{
    use HasFactory;
    protected $table = 'tb_stok_bahan';
    protected $guarded = [];
}
