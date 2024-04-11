<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testList;

class InvestigationsController extends Controller
{
    public function investigations(){
        return view('Test-details.test');
    }

    //Show all test from test list table , on page load
    public function investigations_data(Request $request){
        if($request->ajax()){
            
            $investigations = testList::orderBy('id', 'desc')->get();
            $output = "<table id=worklist>
                          
                          <tr>
                               <th>Serial No</th>
                               <th>Investigations</th>
                               <th>Short Name</th>
                               <th>Price</th>
                          </tr>
                        ";

            if(count($investigations) > 0){
                $serial_no = 0;
                foreach ($investigations as  $value) {
                    $serial_no ++;

                    $test_name = ucwords(strtolower($value->test_name));
                    $short_name = strtolower($value->short_name);
                    
                    $output .= "<tr data-href=update_investigation/$value->id>
                                      <td>$serial_no</td>
                                      <td>$test_name</td>
                                      <td>$short_name</td>
                                      <td>$value->price</td>
                                  </tr>";
                }

               
            }else{
                $output .= ' <tr>
                                 <td scope=col colspan=5 style= text-align:center;>Investigation Empty...</td>
                             </tr>';
            }

            $output .= '</table>';
            return $output;
        }
    }
    //End Show all test

   //Add Investigation
    public function add_invetigation(Request $request){

        if($request->ajax()){
            $avilable = testList::where('test_name', $request->investigation_name)->orWhere('short_name', $request->short_name)->get();
            if(count($avilable) > 0){
                return "Test Allready Added";
            }else{

                $test = new testList();
                $test->test_name = strtolower($request->investigation_name);
                $test->short_name = strtolower($request->short_name);
                $test->price = $request->price;

                if($test->save()){
                   return 1;
                }else{
                  return 0;
                }

            }

            

        }

    }
    //End Add Investigation
    
    //search Investigation
    public function searchInvestigation(Request $request){
        if($request->ajax()){
            $investigations = testList::where('test_name','LIKE', strtolower($request->name).'%')->orWhere('short_name','LIKE', $request->name.'%')->get();
            $output = "<table id=worklist>
                          
                          <tr>
                               <th>Serial No</th>
                               <th>Investigations</th>
                               <th>Short Name</th>
                               <th>Price</th>
                          </tr>
                        ";

            if(count($investigations) > 0){
                $serial_no = 0;
                foreach ($investigations as  $value) {
                    $serial_no ++;

                    $test_name = ucwords(strtolower($value->test_name));
                    $short_name = ucwords(strtolower($value->short_name));
                    
                    $output .= "<tr data-href=update_investigation/$value->id>
                                      <td>$serial_no</td>
                                      <td>$test_name</td>
                                      <td>$short_name</td>
                                      <td>$value->price</td>
                                  </tr>";
                 }

               
            }else{
                $output .= ' <tr>
                                 <td scope=col colspan=5 style= text-align:center;>Investigation Not Found...</td>
                             </tr>';
            }

            $output .= '</table>';
            return $output;
  
        }
    }
    //End search Investigation

    //update Investigation
    public function update_investigation(Request $request, $investigation_id){
        $investigation_record = testList::find($investigation_id);
        //return $investigation_record;
        return view('Test-details.test_update',compact('investigation_record'));
    }
    public function update_investigation_test(Request $request){
        if($request->ajax()){

            $data = testList::find($request->id);
            $data->test_name = $request->investigation_name;
            $data->short_name = $request->short_name;
            $data->price = $request->price;
            if($data->save()){
                return "Update Success"."<br>"."Test Name : ".$request->investigation_name."<br>". "Short Name : ".$request->short_name."<br>"." Price : ".$request->price ;
            }else{
                return "0";
            }
            
            
        }
    }
    //update Investigation



}
