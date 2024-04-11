<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bloodgroup extends Model
{
    use HasFactory;
    //Accessor
    public function getBloodGroupAttribute($value){
        return strtoupper($value);
    }
    public function getRhTypingAttribute($value){
        return strtoupper($value);
    }

    //Mutator
    public function setBloodGroupAttribute($value){
        $this->attributes['blood_group'] = strtolower($value);   
    }
    public function setRhTypingAttribute($value){
        $this->attributes['rh_typing'] = strtolower($value);   
    }
}
