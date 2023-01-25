<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    // use HasFactory;
    
     // use HasFactory;
     use SoftDeletes;


     // declare table
     public $table = 'specialist';
     
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
         'name',
         'price',
         'created_at',
         'update_at',
         'deleted_at',
     ];
          //one to many
     //nama functionnya tabel yang dituju
     public function doctor()
     {
        //2 parameter( path model, field foreign key)
        return this->hasMany('App\Models\Operational\Doctor', 'specialist_id');   //(pathdarimodel yang dituju', 'namafield di detail user yang dituju)

     }


}
