<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\investigation;

class PatientPanelContoller extends Controller
{
    public function get_patient($patient_id, Request $request){

        $Patient = patient::find(base64_decode($patient_id));
        $Tests = patient::find(base64_decode($patient_id))->investigation;//this table relate one to many [patient---to--many investigation] 
        //$Tests = investigation::where('patient_id',convert_uudecode($patient_id))->get();
        
        $request->session()->put('patient_id',$Patient->id);
        return view('patient.patient_panel',['patient'=>$Patient, 'Tests'=>$Tests]);
 
    }
}
