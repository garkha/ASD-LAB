<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class btct extends Model
{
    use HasFactory;
    //Accessor
    public function getBleedingTimeAttribute($value){
        return strtoupper($value);
    }
    public function getClottingTimeAttribute($value){
        return strtoupper($value);
    }
    
    //Mutator
    public function setBleedingTimeAttribute($value){
        $this->attributes['BLEEDING_TIME'] = strtolower($value);   
    }

    public function setClottingTimeAttribute($value){
        $this->attributes['CLOTTING_TIME'] = strtolower($value);   
    }
    
   
}
