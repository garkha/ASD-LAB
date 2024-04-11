<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    //public $autoincrement = false;//stop id column auto increment
    public function investigation(){
        return $this->hasMany(investigation::class);
        //return $this->hasMany('App\Models\investigation'); // we also use this type for full path
    }

    public function bloodgroup(){
        return $this->hasOne(bloodgroup::class);
    }
    public function fastingbloodsugar(){
        return $this->hasOne(fastingbloodsugar::class);
    }
    public function btct(){
        return $this->hasOne(btct::class);
    }
    public function fastingpp(){
        return $this->hasOne(fastingpp::class);
    }
    public function randombloodsugar(){
        return $this->hasOne(randombloodsugar::class);
    }
    public function hcv(){
        return $this->hasOne(hcv::class);
    }
    public function hiv(){
        return $this->hasOne(hiv::class);
    }
    public function vdrl(){
        return $this->hasOne(vdrl::class);
    }
    public function vitaminbtwelve(){
        return $this->hasOne(vitaminbtwelve::class);
    }
    public function plateletcount(){
        return $this->hasOne(plateletcount::class);
    }
    public function thyroid(){
        return $this->hasOne(thyroid::class);
    }
    public function widal(){
        return $this->hasOne(widal::class);
    }
    public function typhidotiggigm(){
        return $this->hasOne(typhidotiggigm::class);
    }
    public function mantoux(){
        return $this->hasOne(mantoux::class);
    }
    public function dengueiggigm(){
        return $this->hasOne(dengueiggigm::class);
    }
    public function denguensone(){
        return $this->hasOne(denguensone::class);
    }
    public function dengueelisa(){
        return $this->hasOne(dengueelisa::class);
    }
    public function crpquantitative(){
        return $this->hasOne(crpquantitative::class);
    }
    public function crpqualitative(){
        return $this->hasOne(crpqualitative::class);
    }
    public function hbsag(){
        return $this->hasOne(hbsag::class);
    }
    public function malariaparasite(){
        return $this->hasOne(malariaparasite::class);
    }
    public function semenanalysis(){
        return $this->hasOne(semenanalysis::class);
    }
    public function kft(){
        return $this->hasOne(kft::class);
    }
    public function hbaonec(){
        return $this->hasOne(hbaonec::class);
    }
    public function gtt(){
        return $this->hasOne(gtt::class);
    }
    public function cbc(){
        return $this->hasOne(cbc::class);
    }
    public function urm(){
        return $this->hasOne(urm::class);
    }
    public function upt(){
        return $this->hasOne(upt::class);
    }
    public function lft(){
        return $this->hasOne(lft::class);
    }

    

    //Accessor 
    public function getNameAttribute($value){
        return strtoupper($value);
    }
    public function getTitleAttribute($value){
        return ucwords($value);
    }
    public function getGenderAttribute($value){
        return strtoupper($value);
    }
    public function getAdviceByDoctorAttribute($value){
        return "Dr. ". strtoupper($value);
    }

    
    //Mutator
    public function setTitleAttribute($value){
        $this->attributes['title'] = strtolower($value);   
    }
    public function setGenderAttribute($value){
        $this->attributes['gender'] = strtolower($value);   
    }
    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);  
    }
    public function setAdviceByDoctorAttribute($value){
        $this->attributes['advice_by_doctor'] = strtolower($value);  
    }
}
