<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mAcTransaksi extends Model
{
    use HasFactory;
    protected $table = 'tb_ac_transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $guarded = [];
}
