<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
     // Use Hasfactory; 
     use Softdeletes;

     //deklarasi tabel 
     public $table = 'specialist';
 
     //tipe data harus yyyy-mm-dd hh:mm:ss 
     protected $dates = [ 
     'created_at', 
     'updated_at', 
     'deleted_at' 
     ]; 
 
     protected $fillable = [ 
     'name', 
     'price', 
     'created_at', 
     'updated_at', 
     'deleted_at' 
     ];
     
     //one to many 
    public function doctor() { 
        return $this->hasMany('App\Models\Operational\Doctor','specialist_id'); 
    } 
   
}
