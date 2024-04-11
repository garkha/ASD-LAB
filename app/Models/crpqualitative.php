<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crpqualitative extends Model
{
    use HasFactory;
    //ACCESSER
    public function getCrpAttribute($value){
        return strtoupper($value);
    }
    //Mutator
    public function setCrpAttribute($value){
        $this->attributes['crp'] = strtolower($value);   
    }
}
