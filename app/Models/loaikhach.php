<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaikhach extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table='loaikhach';
    public $timestamps = false;

}
