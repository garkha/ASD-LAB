<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denguensone extends Model
{
    use HasFactory;
    //ACCESSER
    public function getDengueAttribute($value){
        return strtoupper($value);
    }
    //Mutator
    public function setDengueAttribute($value){
        $this->attributes['dengue'] = strtolower($value);   
    }
    
}
