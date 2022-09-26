<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham_bds extends Model
{
    protected $primaryKey = 'masanpham';
    protected $table='sanpham_bds';
    public $timestamps = false;
    use HasFactory;
}
