<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdatainsert extends Model
{
    protected $table = 'userdatas';
    protected $primaryKey='id';
    protected $fillable=  
    [     
        'name',  
        'phone_number'  
    ];
}
