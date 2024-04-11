<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semenanalysis extends Model
{
    use HasFactory;
    //ACCESSER
    public function getColorAttribute($value){
        return strtoupper($value);
    }
    public function getReactionAttribute($value){
        return strtoupper($value);
    }
    public function getViscocityAttribute($value){
        return strtoupper($value);
    }
    public function getLiquefactionTimeAttribute($value){
        return strtoupper($value);
    }
    //Mutator
    public function setColorAttribute($value){
        $this->attributes['COLOR'] = strtolower($value);   
    }
    public function setReactionAttribute($value){
        $this->attributes['REACTION'] = strtolower($value);   
    }
    public function setViscocityAttribute($value){
        $this->attributes['VISCOCITY'] = strtolower($value);   
    }
    public function setLiquefactionTimeAttribute($value){
        $this->attributes['LIQUEFACTION_TIME '] = strtolower($value);   
    }
    
}
