<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\patient;
use App\Models\investigation;
use App\Models\user;
use PDF;

class DoctorInvoiceController extends Controller
{
    //return doctor invoice page only
    public function GetInvoice(){
        $userid = session()->get('LoginUser');
        $doctor = user::find($userid)->doctor;
        return view('doctor.invoice',['doctors' => $doctor]);
    }

    //
    public function get_doctor_invoice(Request $request){
        if ($request->ajax()) {
            $to_date = date_format(date_create($request->to_date),"Y-m-d");
            $from_date = date_format(date_create($request->from_date),"Y-m-d");
            
            $array = str_split(strtolower($request->doctor));
            $lenght = count($array);
            $newarray = [];
            for ($i=0; $i < ($lenght-4); $i++) { 
                $newarray[$i] = $array[$i+4];
            }
            $doctor = implode("",$newarray);
            $patients = patient::whereBetween('date', [$from_date, $to_date])->where('advice_by_doctor',$doctor)->orderBy('date','ASC')->get();

            if (count($patients)>0) {
                $sn = 0;
                $total_amount =0;
                $output = "<div class='col-md-12' style='line-height:0.2cm; padding-bottom:10px;'>
                <h5 style='text-decoration: underline;'>Invoice Details</h5>
                <p>Doctor Name : $request->doctor</p>
                <p>Statement From $request->from_date To $request->to_date</p>
                <p><a href='download_doctor_statement/$from_date/$to_date/$doctor'>Download Statement</a></p>
                </div>";
                $output .="<table>
                <tr>
                    <th>SN</th>
                    <th>PATIENT DETAILS</th>
                    <th>DATE</th>
                    <th>TEST NAME</th>
                    <th>PRICE</th>
                </tr>";
                
                foreach ($patients as $patient) {
                    $patient_name = $patient->name;
                    $patient_gender = $patient->gender;
                    $patient_age = $patient->age;
                    $patient_registration_date = date_format(date_create($patient->date),"d-m-Y");
                    $tests = patient::find($patient->id)->investigation;
                    foreach ($tests as $test) {
                        $sn++;
                        $test_name = $test->test_name;
                        $test_price = $test->price;
                        $total_amount += $test_price;
                        $output .= "<tr>
                        <td>$sn</td>
                        <td>$patient_name / $patient_gender / $patient_age</td>
                        <td>$patient_registration_date</td>
                        <td>$test_name</td>
                        <td>$test_price</td>
                        </tr>";
                    }

                }
                
                $output .= "
                <tr>
                   <th colspan='5'>Total Amount : Rs. $total_amount</th>
                </tr>
                </table>";
            } else {
                $output ="<table>
                <tr>
                    <th style='text-align:center;'>NO RECORD FOUND.</th>
                </tr>
                </table>";
            }
            
            return $output;
        }  
        
    }


    public function download_invoice($from_date,$to_date,$doctor){
        
        $patient = patient::whereBetween('date', [$from_date, $to_date])->where('advice_by_doctor',$doctor)->orderBy('date','ASC')->get();
        $pdf = PDF::loadView('doctor.doctor_pdf_invoice',['patient'=>$patient,'doctor'=>$doctor,'from_date'=>$from_date,'to_date'=>$to_date]);
        return $pdf->download('doctor.pdf');
    }



}
