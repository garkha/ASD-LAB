<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testList extends Model
{
    use HasFactory;
    //Accessor
    public function getTestNameAttribute($value){
        return strtoupper($value);
    }
    
    //Mutator
    public function setTestNameAttribute($value){
        $this->attributes['test_name'] = strtolower($value);
    }
    public function setShortNameAttribute($value){
        $this->attributes['short_name'] = strtolower($value);
    }
    public function setMvNameAttribute($value){
        $this->attributes['mv_name'] = strtolower($value);
    }
}
