<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urm extends Model
{
    use HasFactory;
    //Accessor 
    public function getColorAttribute($value){
        return ucwords($value);
    }
    public function getTransparencyAttribute($value){
        return ucwords($value);
    }
    public function getUrineGlucoseAttribute($value){
        return ucwords($value);
    }
    public function getUrineProteinAttribute($value){
        return ucwords($value);
    }
    public function getUrineBilirubinAttribute($value){
        return ucwords($value);
    }
    public function getKetonesAttribute($value){
        return ucwords($value);
    }
    public function getBloodAttribute($value){
        return ucwords($value);
    }
    public function getLeukocytesEstAttribute($value){
        return ucwords($value);
    }
    public function getRbcAttribute($value){
        return ucwords($value);
    }
    public function getCrystalsAttribute($value){
        return ucwords($value);
    }
    public function getCastsAttribute($value){
        return ucwords($value);
    }
    public function getBacteriaAttribute($value){
        return ucwords($value);
    }
    public function getOthersAttribute($value){
        return ucwords($value);
    }

    //MUTATOR
    public function setColorAttribute($value){
        $this->attributes['Color'] = strtolower($value);   
    }
    public function setTransparencyAttribute($value){
        $this->attributes['Transparency'] = strtolower($value);
    }
    public function setUrineGlucoseAttribute($value){
        $this->attributes['Urine_Glucose'] = strtolower($value);
    }
    public function setUrineProteinAttribute($value){
        $this->attributes['Urine_Protein'] = strtolower($value);
    }
    public function setUrineBilirubinAttribute($value){
        $this->attributes['Urine_Bilirubin'] = strtolower($value);
    }
    public function setKetonesAttribute($value){
        $this->attributes['Ketones'] = strtolower($value);
    }
    public function setBloodAttribute($value){
        $this->attributes['Blood'] = strtolower($value);
    }
    public function setLeukocytesEstAttribute($value){
        $this->attributes['Leukocytes_Est'] = strtolower($value);
    }
    public function setRbcAttribute($value){
        $this->attributes['Rbc'] = strtolower($value);
    }
    public function setCrystalsAttribute($value){
        $this->attributes['Crystals'] = strtolower($value);
    }
    public function setCastsAttribute($value){
        $this->attributes['Casts'] = strtolower($value);
    }
    public function setBacteriaAttribute($value){
        $this->attributes['Bacteria'] = strtolower($value);
    }
    public function setOthersAttribute($value){
        $this->attributes['Others'] = strtolower($value);
    }


   
}
