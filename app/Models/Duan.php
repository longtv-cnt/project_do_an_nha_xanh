<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duan extends Model
{
    protected $table = 'du_an';
    protected $fillable = ['maduan', 'tenduan','chudautu',];
    protected $primaryKey = 'maduan';
    public $timestamps = false;
    use HasFactory;
}
