<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vdrl extends Model
{
    use HasFactory;
    //Accessor
    public function getRprAttribute($value){
        return strtoupper($value);
    }
    //Mutator
    public function setRprAttribute($value){
        $this->attributes['rpr'] = strtolower($value);   
    }
}
