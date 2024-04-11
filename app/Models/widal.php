<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class widal extends Model
{
    use HasFactory;
    //ACCESSER
    public function getResultAttribute($value){
        return strtoupper($value);
    }
    
    //Mutator
    public function setResultAttribute($value){
        $this->attributes['RESULT'] = strtolower($value);   
    }
    
}
