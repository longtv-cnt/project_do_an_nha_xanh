<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanphambanners extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table='banner_product';
    public $timestamps = false;
}
