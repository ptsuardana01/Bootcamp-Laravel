<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mDistribusi extends Model
{
    use HasFactory;
    protected $table = 'tb_distribusi';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
