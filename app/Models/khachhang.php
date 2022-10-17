<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $fillable = ['tenkhach', 'sdt', 'email','diachi','maloaikhach','idUser'];
    protected $primaryKey = 'id';
    protected $table='khachhang';
    public $timestamps = false;
    use HasFactory;
}
