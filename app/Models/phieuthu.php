<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phieuthu extends Model
{
    protected $primaryKey = 'maphieu';
    protected $table='phieuthu';
    public $timestamps = false;
    use HasFactory;}
