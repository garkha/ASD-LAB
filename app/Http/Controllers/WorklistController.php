<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;

class WorklistController extends Controller
{
    public function show_worklist_page(){
        return view('patient.worklist');
    }

    public function get_patient_list(Request $request){
        if($request->ajax()){
            $str = $request->inv_date;
            $new_str = explode("-",$str);
            $select_date = $new_str[2]."-".$new_str[1]."-".$new_str[0];

            $search = patient::where('date',$select_date)->where('user_id',$request->session()->get('LoginUser'))->get();
            $output = '<table id=worklist>
                              <tr>
                                  <th>Serial No</th>
                                  <th>Patient ID</th>
                                  <th>Patient Name</th>
                                  <th>Advice Date</th>
                                  <th>Refered By</th>
                               </tr>
            ';

            if(count($search) > 0){
                $serial_no = 0;
               foreach ($search as  $value) {
                  $serial_no ++;
                  $date = date_create($value->date);
                  $datee = date_format($date,'d-m-Y');
                  $Name = ucwords(strtolower($value->name));
                  $gender = ucwords(strtolower($value->gender));
                  $patient_id = base64_encode($value->id);
                  $output .= "<tr data-href=patient_panel/$patient_id>
                                    <td>$serial_no</td>
                                    <td>$value->uniq_id</td>
                                    <td>$Name/ $gender / $value->age</td>
                                    <td>$datee</td>
                                    <td>$value->advice_by_doctor</td>
                                </tr>";
               }
            }else{
                $output .= ' <tr>
                                 <td scope=col colspan=5 style= text-align:center;>No Records Found on the select Date.... '.$request->inv_date.'</td>
                             </tr>';
            }

            $output .= '</table>';
            return $output;

        }
    }
    
    //SEARCH PATIENT
    public function search_patient(Request $request){
        if($request->ajax()){
            $words = $request->a;
            if($request->b != 0){
                $select_date = date_format(date_create($request->b),"Y-m-d");
                $search = patient::where('date',$select_date)->where('user_id',$request->session()->get('LoginUser'))->where('name','LIKE',$words.'%')->get();
            }else{
                $search = patient::where('user_id',$request->session()->get('LoginUser'))->where('name','LIKE',$words.'%')->get();
            }
            
            $output = '<table id=worklist>
                              <tr>
                                  <th>Serial No</th>
                                  <th>Patient ID</th>
                                  <th>Patient Name</th>
                                  <th>Advice Date</th>
                                  <th>Refered By</th>
                               </tr>
            ';

            if(count($search) > 0){
                $serial_no = 0;
               foreach ($search as  $value) {
                  $serial_no ++;
                  $date = date_create($value->date);
                  $datee = date_format($date,'d-m-Y');
                  $Name = ucwords(strtolower($value->name));
                  $gender = ucwords(strtolower($value->gender));
                  $patient_id = base64_encode($value->id);
                  $output .= "<tr data-href=patient_panel/$patient_id>
                                    <td>$serial_no</td>
                                    <td>$value->uniq_id</td>
                                    <td>$Name/ $gender / $value->age</td>
                                    <td>$datee</td>
                                    <td>$value->advice_by_doctor</td>
                                </tr>";
               }
            }else{
                $output .= ' <tr>
                                 <td scope=col colspan=5 style= text-align:center;>No Records Found on the select Date.... '.$request->inv_date.'</td>
                             </tr>';
            }

            $output .= '</table>';
            return $output;

        }
    }
}
