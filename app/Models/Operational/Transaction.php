<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    // use HasFactory;
    
     // use HasFactory;
     use SoftDeletes;


     // declare table
     public $table = 'transaction';
     
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
         'appointment_id',
         'fee_doctor',
         'fee_specialist',
         'fee_hospital',
         'sub_total',
         'vat',
         'total',
         'created_at',
         'update_at',
         'deleted_at',
     ];
     public function appointment()
     {
        //3 parameter( path model, field foreign key, field primary key from tabel hasmany/hasone )
        return this->belongsTo('App\Models\Operational\Appointment', 'appointment_id', 'id');   
        
     }

     
}
