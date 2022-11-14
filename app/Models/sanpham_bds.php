<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sanpham_bds extends Model
{

    protected $primaryKey = 'id';
    protected $table='sanpham_bds';
    public $timestamps = false;
    use HasFactory;

    public function comment()
    {
        return $this->hasMany('App\Models\phanhoi');
    }

}
