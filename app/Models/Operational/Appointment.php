<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    // use HasFactory;
    
     // use HasFactory;
     use SoftDeletes;


     // declare table
     public $table = 'appointment';
     
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
         'doctor_id',
         'user_id',
         'consultation_id',
         'level',
         'date',
         'time',
         'status',
         'created_at',
         'update_at',
         'deleted_at',
     ];

     public function doctor()
     {
        //3 parameter( path model, field foreign key, field primary key from tabel hasmany/hasone )
        return this->belongsTo('App\Models\Operational\Doctor', 'doctor_id', 'id');   //(pathdarimodel yang dituju', 'namafield di detail user yang dituju)
        
     }
     public function user()
     {
         //3 parameter( path model, field foreign key, field primary key from tabel hasmany/hasone )
         return this->belongsTo('App\Models\User', 'user_id', 'id');   
         
     }

     public function consultation()
     {
           return this->belongsTo('App\Models\MasterData\Consultation', 'consultation_id', 'id');  
           
     }




          //one to one
     public function transaction()
     {
        //2 parameter( path model, field foreign key)
        return this->hasOne('App\Models\Operational\Transaction', 'appointment_id');   //(pathdarimodel yang dituju', 'namafield di detail user yang dituju)

     }





    }
    