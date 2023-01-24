<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
    // use HasFactory;
    use SoftDeletes;


     // declare table
     public $table = 'permission_role';
     
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
         'permission_id',
         'role_id',
         'created_at',
         'update_at',
         'deleted_at',
     ];
}
