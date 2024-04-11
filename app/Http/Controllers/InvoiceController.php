<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\investigation;
use PDF;

class InvoiceController extends Controller
{
    public function make_invoice(Request $request){
        if($request->session()->has('patient_id')){
            $patient_id = session()->get('patient_id');
            $patient = patient::find($patient_id);
            $Tests = investigation::where('patient_id',$patient_id)->get();

            $pdf = PDF::loadView('invoice.invoice',['patient'=>$patient, 'tests'=>$Tests]);
            return $pdf->download('invoice.pdf');

           // return view('invoice.invoice',['patient'=>$patient]);
        }else{
            return "patient id not set in session";
        }
    }

    //this function download invoice from gest user
    public function gest_invoice(Request $request,$patient_id){
        
        $patient = patient::find($patient_id);
        $Tests = investigation::where('patient_id',$patient_id)->get();

        $pdf = PDF::loadView('invoice.invoice',['patient'=>$patient, 'tests'=>$Tests]);
        return $pdf->download('invoice.pdf');

           
    }
}
