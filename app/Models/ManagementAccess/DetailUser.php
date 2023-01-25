<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table
    public $table = 'detail_user';
    
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
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'update_at',
        'deleted_at',
    ];

    // one to many
    
     //one to many
     //nama functionnya tabel yang dituju
     public function type_user()
     {
        //3 parameter( path model, field foreign key, field primary key from tabel hasmany/hasone )
        return this->belongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');   //(pathdarimodel yang dituju', 'namafield di detail user yang dituju)
        
     }

     public function user()
     {
        //3 parameter( path model, field foreign key, field primary key from tabel hasmany/hasone )
        return this->belongsTo('App\Models\User', 'user_id', 'id');   
        
     }
}    





//belongsTo= milik
 
// one to many = HasMany -> memiliki banyak di
// one to one = HasOne   -> memiliki satu di



