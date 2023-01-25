<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    
     // use HasFactory;
     use SoftDeletes;


     // declare table
     public $table = 'consultation';
     
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
         'created_at',
         'update_at',
         'deleted_at',
     ];

     public function appointment()
     {
        return this->hasMany('App\Models\Operational\Appointment', 'consultation_id'); 
        
     }
}
