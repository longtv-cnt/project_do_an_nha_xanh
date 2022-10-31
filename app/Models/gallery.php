<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $primaryKey = 'id';
    protected $table='gallery';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'sanpham_id',
        'image',
        'video',

    ];

    use HasFactory;}
