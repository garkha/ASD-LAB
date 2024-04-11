<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class malariaparasite extends Model
{
    use HasFactory;
    //Accesser
    public function getMpAttribute($value){
        return ucwords($value);
    }
    public function getCommentAttribute($value){
        return ucwords($value);
    }
    //Mutator
    public function setMpAttribute($value){
        $this->attributes['mp'] = strtolower($value);   
    }
    public function setCommentAttribute($value){
        $this->attributes['comment'] = strtolower($value);   
    }

}
