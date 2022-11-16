<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class phanhoi extends Model
{
    protected $primaryKey = 'id';
    protected $table='phanhoi';
    protected $fillable = ['id','user_id', 'masp', 'comment', 'comment_parent', 'ngaytao', 'ngaycapnhat'];
    public $timestamps = false;
    use HasFactory;

    public function product()
    {
        return $this->belongsTo('App\Models\sanpham_bds','masp');
    }
}
