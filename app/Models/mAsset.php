<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mAsset extends Model
{
    use HasFactory;
    protected $table = 'tb_asset';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
