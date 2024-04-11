<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\doctor;
use App\Models\user;
use App\Models\investigation;

class PatientController extends Controller
{
    public function register_new_patient(Request $request){
        if($request->session()->has('patient_id')){
            $request->session()->forget('patient_id');
        }
        $doctor = doctor::all();
        return view('patient.register_new_patient', compact('doctor'));
    }

    public function new_patient(Request $request){
        $validate = $request->validate([
            'title' => ['required'],
            'name' => ['required','min:4'],
            'age' => ['required','numeric'],
            'date' => ['required',],
            'gender' => ['required','alpha'],
            'advice_by_doctor' => ['required','min:4']
        ]);
        if($request->mobile){
            $request->validate(['mobile'=>'min:10 | max:10']);
        }
        
        //trim doctor
        $array = str_split(strtolower($request->advice_by_doctor));
        $lenght = count($array);
        $newarray = [];
        for ($i=0; $i < ($lenght-4); $i++) { 
            $newarray[$i] = $array[$i+4];
        }
        $doctor = implode("",$newarray);
        //End trim doctor
        
        $uniq_id = rand(10000000,99999999);//genrate uniq id of patient
        $patient = new patient();
        $patient->id = $uniq_id;
        $patient->uniq_id = $uniq_id;
        $patient->title = $request->title;
        $patient->name = $request->name;
        $patient->age = $request->age;
        $date = date_create($request->date);
        $patient->date = date_format($date,"Y-m-d");
        $patient->time = $request->time;
        $patient->advice_by_doctor = $doctor;
        $patient->gender = $request->gender;
        $patient->mobile = $request->mobile;
        $user = user::find(session()->get('LoginUser'));
        if($user->patient()->save($patient)){

            $request->session()->put('patient_id',$patient->id);

            if($request->session()->has('patient_id')){
                return redirect("investigation");
            }else{
                return redirect("register new patient");
            }
            
           
        }

    }

    public function show_investigation(Request $request){
        
        if($request->session()->has('patient_id')){
            $patient_id = session()->get('patient_id');
            if($patient_id){
                //$test = investigation::where('patient_id', $patient_id)->get();
                $test = patient::find($patient_id)->investigation;
                return view('patient.investigation',['test'=>$test]);
            }
        }else{
            return redirect("register new patient")->with('fail','patient id not store in session veriable');
        }

        //some time session not set so above function not work
        $patient_id = session()->get('patient_id');
        if($patient_id){
            //$test = investigation::where('patient_id', $patient_id)->get();
            $test = patient::find($patient_id)->investigation;
            return view('patient.investigation',['test'=>$test]);
        }
  
    }

    //DELETE patient id from SESSION veriable
    public function delete_session(Request $request){
        if($request->session()->has('patient_id')){
            $request->session()->forget('patient_id');
            return redirect('register new patient');
        }else{
            return "somthing went worng";
        }
    }
    //END

    //UPDATE PATIENT DETAILS
    public function update_patient_details(Request $request){
        if($request->session()->has('patient_id')){
            $patient_id = session()->get('patient_id');
            $patient = patient::find($patient_id);
            $doctor = doctor::all();
            return view('patient.update_patient_details',['patient'=>$patient, 'doctor'=>$doctor]);
        }else{
            return "patient id not set in session";
        }
    }
    public function update_patient(Request $request){
        if($request->session()->has('patient_id')){
            $validate = $request->validate([
                'title' => ['required'],
                'name' => ['required','min:4'],
                'age' => ['required','numeric'],
                'date' => ['required',],
                'gender' => ['required','alpha'],
                'advice_by_doctor' => ['required','min:4']
            ]);
            if($request->mobile){
                $request->validate(['mobile'=>'min:10 | max:10']);
            }
            //trim doctor
            $array = str_split(strtolower($request->advice_by_doctor));
            $lenght = count($array);
            $newarray = [];
            for ($i=0; $i < ($lenght-4); $i++) { 
                $newarray[$i] = $array[$i+4];
            }
            $doctor = implode("",$newarray);
            //End trim doctor

            $patient_id = base64_encode(session()->get('patient_id'));
            $patient = patient::find(session()->get('patient_id'));
            $patient->title = $request->title;
            $patient->name = $request->name;
            $patient->age = $request->age;
            $patient->date = date_format(date_create($request->date),"Y-m-d");
            $patient->time = $request->time;
            $patient->advice_by_doctor = $doctor;
            $patient->gender = $request->gender;
            $patient->mobile = $request->mobile;
            if($patient->save()){
                return redirect()->route('patient_panel',$patient_id)->with('success',"Patient $request->title $request->name Details Updated successful.");
            }else{
                return redirect()->route('patient_panel',$patient_id)->with('fail',"Patient $request->title $request->name Details Not Updated");
            }
            
        }else{
            return redirect()->route('patient_panel',$patient_id)->with('fail',"patient id not found from session");
        }
        
        

       
        
    }

}
