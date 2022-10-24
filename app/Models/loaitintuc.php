<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaitintuc extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table='loaitintuc';
    public $timestamps = false;
    public function tintuc(){
        return $this->hasMany('App\Models\tintuc');
    }
}
