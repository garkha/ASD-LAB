<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hiv extends Model
{
    use HasFactory;
    //Accessor
    public function getHivAttribute($value){
        return strtoupper($value);
    }
    //Mutator
    public function setHivAttribute($value){
        $this->attributes['hiv'] = strtolower($value);   
    }
}
