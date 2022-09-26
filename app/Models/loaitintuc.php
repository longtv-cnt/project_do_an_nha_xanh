<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaitintuc extends Model
{
    use HasFactory;
    protected $primaryKey = 'maloaitin';
    protected $table='loaitintuc';
    public $timestamps = false;
}
