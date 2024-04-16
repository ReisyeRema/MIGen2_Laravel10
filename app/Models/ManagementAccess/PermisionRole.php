<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class PermisionRole extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'permission_role';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'permission_id',
        'role_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //one to many 
    public function permission() { 
    return $this-> belongsTo('App\Models\ManagementAccess\Permission' , 'permission_id', 'id'); 
    } 
    
    //one to many 
    public function role() { 
    return $this->belongsTo('App\Models\ManagementAccess\Role' , 'role_id', 'id'); 
    }
}
