<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fastingpp extends Model
{
    use HasFactory;
    public function getFastingAttribute($value){
        return strtoupper($value);
    }
    public function getPpAttribute($value){
        return strtoupper($value);
    }
}
