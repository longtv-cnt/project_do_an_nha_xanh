<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisp_bds extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table='loaisp_bds';
    public $timestamps = false;
}
