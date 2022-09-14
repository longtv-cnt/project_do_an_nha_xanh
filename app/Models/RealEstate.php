<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealEstate extends Model
{
    protected $table = 'sanpham_bds';

    protected $filltable = ['id', 'maloai', 'tensp', 'chieudai','chieurong', 'chieudai', 'diachi','maduan',
    'giatien'  , 'huong','sophongtam','sophongngu', 'anhsp', 'created_at', 'updated_at','xetduyet','diachi','nhaxanh'];
    use HasFactory;
}
