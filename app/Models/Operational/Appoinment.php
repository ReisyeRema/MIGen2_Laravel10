<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Appoinment extends Model
{
     // Use Hasfactory; 
     use Softdeletes;

     //deklarasi tabel 
     public $table = 'appointment';
 
     //tipe data harus yyyy-mm-dd hh:mm:ss 
     protected $dates = [ 
     'created_at', 
     'updated_at', 
     'deleted_at' 
     ]; 
 
     protected $fillable = [ 
     'doctor_id',  
     'user_id',  
     'consultation_id',  
     'level',  
     'date',  
     'time',  
     'status',  
     'created_at', 
     'updated_at', 
     'deleted_at' 
     ];
     
     //one to many 
    public function doctor() { 
        return $this->belongsTo('App\Models\Operational\Doctor' , 'doctor_id', 'id'); 
    } 
    //one to many 
    public function consultation() { 
        return $this->belongsTo('App\Models\MasterData\Consultation' , 'consultation_id', 'id'); 
    } 
    //one to many 
    public function user() { 
        return $this->belongsTo('App\Models\User' , 'user_id', 'id'); 
    } 
    public function transaction() { 
        return $this->hasOne('App\Models\Operational\Transaction' , 'appointment_id'); 
    } 
    
}
