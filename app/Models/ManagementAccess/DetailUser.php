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

    public function type_user()
    {
        return $this->belongsTo(App);

    }
}    
