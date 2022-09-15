<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProduct extends Model
{
    protected $table = 'loaisp_bds';
    protected $fillable = [ 'tenloai',];
    use HasFactory;
}
