<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hbsag extends Model
{
    use HasFactory;
    public function getHbsagAttribute($value){
        return ucwords($value);
    }
    //Mutator
    public function setHbsagAttribute($value){
        $this->attributes['hbsag'] = strtolower($value);   
    }
}
