<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upt extends Model
{
    use HasFactory;
    //Accessor 
    public function getUptAttribute($value){
        return ucwords($value);
    }
    //MUTATOR
    public function setUptrAttribute($value){
        $this->attributes['UPT'] = strtolower($value);   
    }
}
