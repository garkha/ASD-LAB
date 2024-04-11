<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\investigation;
use App\Models\patient;
use App\Models\testList;

class testlistController extends Controller
{
    public function add_test(Request $request){

        if($request->ajax()){
            
            $data = testList::where('test_name', $request->test_name)->get();
            foreach($data as $value){
                $test_id = $value->id;
                $test_name = $value->test_name;
                $short_name = $value->short_name;
                $price = $value->price;
                $mv_name = $value->mv_name;
            }

            

            $search = investigation::where('patient_id',session()->get('patient_id'))->where('test_id',$test_id)->get();

            if(count($search)==1){
                return "Test Allready Added";
            }else{
                
                $patient = patient::find(session()->get('patient_id'));//find patient
                $investigation = new investigation();
                $investigation->test_name = $test_name;
                $investigation->price = $price;
                $investigation->test_id = $test_id;
                $investigation->mv_name = $mv_name;
                $investigation->short_name = $short_name;
                if($patient->investigation()->save($investigation)){
                    return "save";
                }else{
                    return "Somthing went worng";
                }
   
            }
           
        }
        return redirect('investigation');
        
    }

    public function find_test(Request $request){
        if($request->ajax()){
          $data = testList::where('test_name','LIKE', $request->name.'%')->orWhere('short_name','LIKE', $request->name.'%')->get();
          $output = "";
          $output = '<ol>';

          if(count($data) > 0){
            foreach ($data as  $value) {
              $output .= '<li>'.$value->test_name.'</li>';
            }
          }else{
            $output .= '<li>No Data Found</li>';
          }
          $output .= '<ol>';
          return $output;
        }

        return view('lab-report.patient-reg-1');
    }

   

    public function delete_test($id){
        $test = investigation::find($id);
        $test->delete();
        return redirect('investigation');
    }
    public function update_test($id,$price){
        $test = investigation::find($id);
        $test->price = $price;
        if( $test->save()){
            return redirect('investigation')->with('message',"$test->test_name New price is $test->price");
        }else{
            return redirect('investigation')->with('fail',"somthing went worng!");
        }
        
    }
}
