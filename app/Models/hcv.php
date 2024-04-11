<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hcv extends Model
{
    use HasFactory;
    //Accessor
    public function getHcvAttribute($value){
        return strtoupper($value);
    }
    //Mutator
    public function setHcvAttribute($value){
        $this->attributes['hcv'] = strtolower($value);   
    }
}
