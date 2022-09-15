<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duan extends Model
{
    protected $table = 'du_an';
    protected $fillable = ['ma_du_an', 'tenduan','chudautu',];
    protected $primaryKey = 'ma_du_an';
    use HasFactory;
}
