<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table='tintuc';
    protected $fillable = [
        'tentin',
        'loaitin',
        'noidung',
        'ngaydang',
        'manguoidang',
        
    ];
    public $timestamps = false;
    public function loaitintuc(){
        return $this->belongsTo('App\Models\loaitintuc','loaitin','id');
    }
}

