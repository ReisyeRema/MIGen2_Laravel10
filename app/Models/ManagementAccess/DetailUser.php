<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    // use HasFactory;
    use Softdeletes;

    //deklarasi tabel
    public $table = 'detail_user';

    //tipe data harus yyyy-mm-dd hh:mm:ss 
    protected $dates = [ 
     'created_at', 
     'updated_at', 
     'deleted_at' 
    ]; 

    protected $fillable = [ 
     'user_id', 
     'type_user_id', 
     'contact', 
     'address', 
     'photo', 
     'gender', 
     'created_at', 
     'updated_at', 
     'deleted_at' 
    ]; 

    // one to one
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function type_user()
    {
        return $this->belongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');
    }
}
