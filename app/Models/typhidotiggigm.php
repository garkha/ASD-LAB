<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typhidotiggigm extends Model
{
    use HasFactory;
    //ACCESSER
    public function getIggAttribute($value){
        return strtoupper($value);
    }
    public function getIgmAttribute($value){
        return strtoupper($value);
    }

    //Mutator
    public function setIggAttribute($value){
        $this->attributes['igg'] = strtolower($value);   
    }
    public function setIgmAttribute($value){
        $this->attributes['igm'] = strtolower($value);   
    }
}
