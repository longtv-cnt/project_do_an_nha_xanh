<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duan extends Model
{

    protected $primaryKey = 'maduan';
    protected $table='du_an';
    public $timestamps = false;
    use HasFactory;
}
