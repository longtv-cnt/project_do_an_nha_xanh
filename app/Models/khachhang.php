<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $primaryKey = 'makhach';
    protected $table='khachhang';
    public $timestamps = false;
    use HasFactory;
}