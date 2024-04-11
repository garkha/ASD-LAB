<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    //Accessor
    public function getNameAttribute($value){
        return "Dr. ".strtoupper($value);
    }
    //Mutator
    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }
}
