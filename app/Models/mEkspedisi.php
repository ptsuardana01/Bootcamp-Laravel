<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mEkspedisi extends Model
{
    use HasFactory;
    protected $table = 'tb_ekspedisi';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
