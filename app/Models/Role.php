<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

 use App\Models\Permission;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name','display_name',];
    public function permission(){
        return $this->belongsToMany(Permission::class,'role_permission','role_id','permission_id');
    }
    use HasFactory;
}
