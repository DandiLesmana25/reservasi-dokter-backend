<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    // use HasFactory;
    use SoftDeletes;


     // declare table
     public $table = 'permission';
     
     // this type  must type date  yyyy-mm-dd hh:mm:ss
     // field ini harus di isi dengan type date
     protected $dates = [
         // menyimpan date perubahan
         'created_at',
         'update_at',
         'deleted_at',
     ];
 
     //declare fillable
     protected $fillable = [
         'title',
         'created_at',
         'update_at',
         'deleted_at',
     ];

     public function permission_role()
     {
        //2 parameter( path model, field foreign key)
        return this->hasMany('App\Models\ManagementAcces\PermissionRole', 'permission_id');   

     }
 
}
