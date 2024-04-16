<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
     // Use Hasfactory; 
     use Softdeletes;

     //deklarasi tabel 
     public $table = 'doctor';
 
     //tipe data harus yyyy-mm-dd hh:mm:ss 
     protected $dates = [ 
     'created_at', 
     'updated_at', 
     'deleted_at' 
     ]; 
 
     protected $fillable = [ 
     'specialist_id',  
     'name',  
     'fee',  
     'photo',  
     'created_at', 
     'updated_at', 
     'deleted_at' 
     ];
     
     //one to many 
    public function specialist() { 
        return $this->belongsTo('App\Models\MasterData\Specialist' , 'specialist_id', 'id'); 
    } 
    
    public function appointment() { 
        return $this->hasMany('App\Models\Operational\Appointmnet' , 'doctor_id'); 
    } 
}
