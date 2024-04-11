<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class investigation extends Model
{
    use HasFactory;
    //Accessor
    public function getTestNameAttribute($value){
        return strtoupper($value);
    }
}
