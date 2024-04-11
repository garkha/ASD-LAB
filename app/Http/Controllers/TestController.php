<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testList;

class TestController extends Controller
{
    //ADD TEST IN TEST LIST
    public function view_test(){
        return view('investigation.test');
    }
    public function add_test(Request $request){
        $request->validate([
            
            'test_name' => 'required',
            'short_name' => 'required',
            'price' => 'required|numeric',
            
        ]);

        $check_test_is_Exists = testList::where('test_name',$request->test_name)->orWhere('short_name',$request->short_name)->get();
        if(count($check_test_is_Exists) >= 1){
            return redirect('test list')->withInput($request->input())->with('fail',"$request->test_name Test Allready Exists"); 
        }else{
            $check_view_is_Exists = testList::where('mv_name',$request->mv)->get();
            if(count($check_view_is_Exists) >= 1){
                return redirect('test list')->withInput($request->input())->with('fail',"Model and view Allready Exists");
            }else{
                $test = new testList();
                $test->test_name = $request->test_name;
                $test->short_name = $request->short_name;
                $test->price = $request->price;
                $test->mv_name = $request->mv;

                if($test->save()){

                    if($request->mv){

                        $UpdateFile = strtolower($request->mv."_update.blade.php");
                        $PdfFile = strtolower($request->mv."_pdf.blade.php");
                        $view_name = strtolower($request->mv).".blade.php";

                        if(!file_exists("../resources/views/make_report/$view_name") || !file_exists("../resources/views/make_report/$UpdateFile") || !file_exists("../resources/views/make_report/$PdfFile")){
                            $make_file_first = fopen("../resources/views/make_report/$view_name",'w') or die('there is a problem');
                            $mystring_first = "@extends('layout.asd')".PHP_EOL.
                            "@section('title','$test->test_name')".PHP_EOL.
                            "@section('head-script')".PHP_EOL.
                            "@endsection".PHP_EOL.
                            "@section('style')".PHP_EOL.
                            "@endsection".PHP_EOL.
                            "@section('main-body')".PHP_EOL.
                            "    <main id='main'>".PHP_EOL.
                            "        <section id='contact' class='contact'>".PHP_EOL.
                            "            <div class='container'>".PHP_EOL.
                            "                <div class='row mt-5'>".PHP_EOL.
                            "                    <div class='info-box' style='padding: 20px; overflow-x:auto;'>".PHP_EOL.
                            "                        <form action='' method='post'>".PHP_EOL.
                            "                            @csrf".PHP_EOL.
                            "                            <table id='test'>".PHP_EOL.
                            "                                <tr>".PHP_EOL.
                            "                                    <th>Test Name<p>$test->test_name</p></th>".PHP_EOL.
                            "                                    <th>Result</th>".PHP_EOL.
                            "                                    <th>Unit</th>".PHP_EOL.
                            "                                    <th>Biological Ref.Interval</th>".PHP_EOL.
                            "                                </tr>".PHP_EOL.
                            "                            </table><br>".PHP_EOL.
                            "                            <button type='reset' class='btn btn-outline-success'>Clear</button>".PHP_EOL.
                            "                            <button type='submit' class='btn btn-outline-success'>Save</button>".PHP_EOL.
                            "                        </form>".PHP_EOL.
                            "                    </div>".PHP_EOL.
                            "                </div>".PHP_EOL.
                            "            </div>".PHP_EOL.
                            "        </section>".PHP_EOL.
                            "    </main>".PHP_EOL.
                            "@endsection".PHP_EOL.
                            "@section('body-script')".PHP_EOL.
                            "   <script type='text/javascript'>".PHP_EOL.
                            "       $(document).ready(function(){".PHP_EOL.
                            "       });".PHP_EOL.
                            "   </script>".PHP_EOL.
                            "@endsection".PHP_EOL;
                            fwrite($make_file_first,$mystring_first);
                            fclose($make_file_first);

                            $mystring_second = "@extends('layout.asd')".PHP_EOL.
                            "@section('title','$test->test_name')".PHP_EOL.
                            "@section('head-script')".PHP_EOL.
                            "@endsection".PHP_EOL.
                            "@section('style')".PHP_EOL.
                            "@endsection".PHP_EOL.
                            "@section('main-body')".PHP_EOL.
                            "    <main id='main'>".PHP_EOL.
                            "        <section id='contact' class='contact'>".PHP_EOL.
                            "            <div class='container'>".PHP_EOL.
                            "                <div class='row mt-5'>".PHP_EOL.
                            "                    <div class='info-box' style='padding: 20px; overflow-x:auto;'>".PHP_EOL.
                            "                        <form action='' method='post'>".PHP_EOL.
                            "                            @csrf".PHP_EOL.
                            "                            <table id='test'>".PHP_EOL.
                            "                                <tr>".PHP_EOL.
                            "                                    <th>Test Name<p>$test->test_name</p></th>".PHP_EOL.
                            "                                    <th>Result</th>".PHP_EOL.
                            "                                    <th>Unit</th>".PHP_EOL.
                            "                                    <th>Biological Ref.Interval</th>".PHP_EOL.
                            "                                </tr>".PHP_EOL.
                            "                                <input type='hidden' name='test_id' value='{{}}'>".PHP_EOL.
                            "                                <tr></tr>".PHP_EOL.
                            "                            </table><br>".PHP_EOL.
                            "                            <button type='reset' class='btn btn-outline-success'>Clear</button>".PHP_EOL.
                            "                            <button type='submit' class='btn btn-outline-success'>Save</button>".PHP_EOL.
                            "                        </form>".PHP_EOL.
                            "                    </div>".PHP_EOL.
                            "                </div>".PHP_EOL.
                            "            </div>".PHP_EOL.
                            "        </section>".PHP_EOL.
                            "    </main>".PHP_EOL.
                            "@endsection".PHP_EOL.
                            "@section('body-script')".PHP_EOL.
                            "   <script type='text/javascript'>".PHP_EOL.
                            "       $(document).ready(function(){".PHP_EOL.
                            "       });".PHP_EOL.
                            "   </script>".PHP_EOL.
                            "@endsection".PHP_EOL;

                            $make_file_second = fopen("../resources/views/make_report/$UpdateFile",'w') or die('there is a problem');
                            fwrite($make_file_second,$mystring_second);
                            fclose($make_file_second);

                            $make_file_third = fopen("../resources/views/make_report/$PdfFile",'w') or die('there is a problem');
                            $mystring_third = "@extends('layout.pdflayout')".PHP_EOL.
                            "@section('style')".PHP_EOL.
                            "@endsection".PHP_EOL.
                            "@section('body')".PHP_EOL.
                            "    <h4>HAEMATOLOGY</h4>".PHP_EOL.
                            "    <table id='test'>".PHP_EOL.
                            "        <tr>".PHP_EOL.
                            "            <th>Test Name With Methodology</th>".PHP_EOL.
                            "            <th class='result'>Result</th>".PHP_EOL.
                            "            <th class='Unit'>Unit</th>".PHP_EOL.
                            "            <th class='Biological'>Biological Ref.Interval</th>".PHP_EOL.
                            "        </tr>".PHP_EOL.
                            "        <tr>".PHP_EOL.
                            "            <th colspan='4'></th>".PHP_EOL.
                            "        </tr>".PHP_EOL.
                            "    </table>".PHP_EOL.PHP_EOL.
                            "    <br><br>".PHP_EOL.PHP_EOL.

                            "    <div class='comment'>".PHP_EOL.
                            "        <span style='font-size: 13px;'>".PHP_EOL.
                            "            <b>COMMENT:</b>".PHP_EOL.
                            "            <span style='font-size: 11px;'>".PHP_EOL.
                            "            </span>".PHP_EOL.
                            "        </span>".PHP_EOL.
                            "    </div>".PHP_EOL.PHP_EOL.

                            "    <div id='end_report'>".PHP_EOL.
                            "        <hr>".PHP_EOL.
                            "        <span>*** End Of Report ***</span>".PHP_EOL.
                            "    </div>".PHP_EOL.
                            "@endsection".PHP_EOL;
                            fwrite($make_file_third,$mystring_third);
                            fclose($make_file_third);
                        }else{
                            return redirect('test list')->withInput($request->input())->with('fail',"Model and view Allready Exists");
                        }

                    }

                    return redirect('test list')->with('success',"$test->test_name Add Successfull");
                    
                }

            }
        }

          
    }//END ADD TEST IN TEST LIST

    //Show all test from test list table , on page load
    public function get_test_list(Request $request){
        if($request->ajax()){
            
            $investigations = testList::orderBy('id', 'desc')->get();
            $output = "<table id=worklist>
                          
                          <tr>
                               <th>Serial No</th>
                               <th>TEST NAME</th>
                               <th>PRICE</th>
                               <th>SHORT NAME</th>
                               <th>MODEL</th>
                          </tr>
                        ";

            if(count($investigations) > 0){
                $serial_no = 0;
                foreach ($investigations as  $value) {
                    $serial_no ++;
 
                    $output .= "<tr data-href=update_investigation/$value->id>
                                      <td>$serial_no</td>
                                      <td>$value->test_name</td>
                                      <td>$value->price</td>
                                      <td>$value->short_name</td>
                                      <td>$value->mv_name</td>
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
    }//End Show all test

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
    }//End search Investigation

    //update Investigation
    public function update_investigation(Request $request, $investigation_id){
        $investigation_record = testList::find($investigation_id);
        //return $investigation_record;
        return view('investigation.test_update',compact('investigation_record'));
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
    } //update Investigation

}
