<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;
    
     // use HasFactory;
     use SoftDeletes;


     // declare table
     public $table = 'doctor';
     
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
         'specialist_id',
         'name',
         'fee',
         'photo',
         'created_at',
         'update_at',
         'deleted_at',
     ];

         //one to many
     //nama functionnya tabel yang dituju
     public function specialist()
     {
        //3 parameter( path model, field foreign key, field primary key from tabel hasmany/hasone )
        return this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');   //(pathdarimodel yang dituju', 'namafield di detail user yang dituju)
        
     }

     //one to many
     public function appointment()
     {
        //2 parameter( path model, field foreign key)
        return this->hasMany('App\Models\Operational\Appointment', 'doctor_id');   //(pathdarimodel yang dituju', 'namafield di detail user yang dituju)

     }
}
