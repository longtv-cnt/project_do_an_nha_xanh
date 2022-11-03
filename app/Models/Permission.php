<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';
    protected $fillable = ['name','display_name',];
    use HasFactory;
    public function role(){
        return $this->belongsToMany(Role::class,'permission_role','permission_id','role_id');
    }
    public function child(){
        return $this->hasMany(Permission::class,'parent_id');
    }
}
