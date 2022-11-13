<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phanhoi extends Model
{
    protected $primaryKey = 'id';
    protected $table='phanhoi';
    public $timestamps = false;
    use HasFactory;

//    protected $fillable = ['user_id', 'post_id', 'parent_id', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(phanhoi::class, 'parent_id');
    }
}
