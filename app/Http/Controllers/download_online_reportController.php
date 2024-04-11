<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Models\investigation;
use App\Models\bloodgroup;
use App\Models\fastingbloodsugar;
use App\Models\btct;
use App\Models\fastingpp;
use App\Models\randombloodsugar;
use App\Models\hcv;
use App\Models\hiv;
use App\Models\vdrl;
use App\Models\vitaminbtwelve;
use App\Models\plateletcount;
use App\Models\thyroid;
use App\Models\widal;
use App\Models\typhidotiggigm;
use App\Models\mantoux;
use App\Models\dengueiggigm;
use App\Models\denguensone;
use App\Models\dengueelisa;
use App\Models\crpquantitative;
use App\Models\crpqualitative;
use App\Models\hbsag;
use App\Models\malariaparasite;
use App\Models\semenanalysis;
use App\Models\kft;
use App\Models\hbaonec;
use App\Models\gtt;
use App\Models\cbc;
use App\Models\urm;
use App\Models\upt;

class download_online_reportController extends Controller
{
    public function download_online_reports(Request $request){
        if($request->ajax()){
            $search = patient::find($request->patient_id);
            if ($search!=null) {
                $mobile = ($search->mobile!=null) ? $search->mobile : "NULL" ;
                $Tests = patient::find($request->patient_id)->investigation;
                $patient_id = base64_encode($request->patient_id);
                $date = date_format(date_create($search->date.$search->time),"d-m-Y h:i:A");
                
                $output = "<table id='customers'>
                <tr>
                    <th colspan='2'>Patient Details </th>
                </tr>
                <tr>
                    <td class='ls'>Date</td>
                    <td>$date</td>
                </tr>
                <tr>
                    <td class='ls'>Patient ID</td>
                    <td>$search->id</td>
                </tr>
                <tr>
                    <td class='ls'>Patient Name</td>
                    <td>$search->title $search->name</td>
                </tr>
                <tr>
                    <td class='ls'>Gender / Age</td>
                    <td>$search->gender / $search->age</td>
                </tr>
                <tr>
                    <td class='ls'>Advice By</td>
                    <td>$search->advice_by_doctor</td>
                </tr>
                <tr>
                    <td class='ls'>Mobile No</td>
                    <td>$mobile</td>
                </tr>
                <tr>
                    <td colspan='2'>
                       <a href='invoice/$request->patient_id' style='color:orange;'>Dwonload Invoice</a>
                    </td>
                </tr>
                </table>";

                if (count($Tests)>0) {
                    $output .= "<table id='customers'>
                    <tr>
                       <td colspan='4' style='background-color:#b2f3f8; text-align:center;'>INVESTIGATION DETAILS</td>
                    </tr>
                    <tr>
                        <td>SN.</td>
                        <td>INVESTIGATION NAME</td>
                        <td>REPORT STATUS</td>
                        <td>DOWNLOAD REPORT</td>
                    </tr>";
                    $sn = 0;

                    foreach($Tests as $Test){
                        $modelname = $Test->mv_name;
                        $pid = $request->patient_id;
                        $abc = patient::find($pid)->$modelname;
                        if ($abc) {
                            $status = "report ready";
                            $mylink = "/download online gest reports/$modelname/$patient_id";
                            $mystyle = "color:green";
                        } else {
                            $status = "report not ready";
                            $mylink = "#reports";
                            $mystyle = "color:red";
                        }
                        
                        $sn++;
                        $output .= "<tr>
                                        <td style='$mystyle'>$sn</td>
                                        <td style='$mystyle'>$Test->test_name</td>
                                        <td style='$mystyle'>$status</td>
                                        <td style='$mystyle'><a href='$mylink' class=''>Download Report</a></td>
                                    </tr>";
                    }
           
                    $output .= "</table>";

                } else {
                    $output .= "<table id='customers'>
                                    <tr>
                                        <th>Investigation details</th>
                                    </tr>
                                    <tr>
                                        <td>No Tests selected</td>
                                    </tr>
                                </table>";
                }
                
            } else {
               
                $output = "NO RECORD FOUND";
            }
            
            return $output;
        }
    }

    /////////////////////////////////////////////////////////
    public function download_online_reports_mobile(Request $request){
        if($request->ajax()){
            $pid = $request->patient_id;

            $search = patient::where('mobile',$pid)->get();
            if (count($search)>0) {
                $output = "<div style='overflow-x:auto;'>";
                $p = 0;
                foreach($search as $patient){
                    $p++;
                    $date = date_format(date_create($patient->date.$patient->time),"d-m-Y h:i:A");
                    $output .= "<table id='customers'>
                    <tr>
                        <th colspan='2'> ($p) . PATIENT DETAILS </th>
                    </tr>
                    <tr>
                        <td class='ls'>Date</td>
                        <td>$date</td>
                    </tr>
                    <tr>
                        <td class='ls'>Patient ID</td>
                        <td>$patient->id</td>
                    </tr>
                    <tr>
                        <td class='ls'>Name</td>
                        <td>$patient->title $patient->name</td>
                    </tr>
                    <tr>
                        <td class='ls'>Gender / Age</td>
                        <td>$patient->gender / $patient->age</td>
                    </tr>
                    <tr>
                        <td class='ls'>Refer By</td>
                        <td>$patient->advice_by_doctor</td>
                    </tr>
                    <tr>
                        <td class='ls'>Mobile Number</td>
                        <td>$patient->mobile</td>
                    </tr>
                    <tr>
                        <td colspan='2' style='text-align:left;'><a href='invoice/$patient->id' style='color:orange;'>Download Invoice</a></td>
                    </tr>
                    </table>";

                    $Tests = patient::find($patient->id)->investigation;
                    if (count($Tests)>0) {
                        $output .= "<table id='customers'>
                        <tr>
                            <td colspan='4' style='background-color:#b2f3f8; text-align:center;'>INVESTIGATION DETAILS</td>
                        </tr>
                        <tr>
                           <td>SN.</td>
                           <td>INVESTIGATION NAME</td>
                           <td>REPORT STATUS</td>
                           <td>DOWNLOAD REPORT</td>
                        </tr>";
                        $sn = 0;
                        foreach($Tests as $Test){
                            $modelname = $Test->mv_name;
                            $id = $patient->id;
                            $encode_patient_id = base64_encode($patient->id);
                            $abc = patient::find($id)->$modelname;

                            if ($abc) {
                                $status = "report ready";
                                $mylink = "/download online gest reports/$modelname/$encode_patient_id";
                                $mystyle = "color:green";
                            } else {
                                $status = "report not ready";
                                $mylink = "#reports";
                                $mystyle = "color:red";
                            }
                            
                            $sn++;
                            $output .= "<tr>
                            <td style='$mystyle'>$sn</td>
                            <td style='$mystyle'>$Test->test_name</td>
                            <td style='$mystyle'>$status</td>
                            <td style='$mystyle'><a href='$mylink' class=''>Download Report</a></td>
                            </tr>";
                        }
                        $output .= "</table></div><br><br>";

                    } else {
                        $output .= "<table id='customers'>
                        <tr>
                            <th>Investigation details</th>
                        </tr>
                        <tr>
                            <td>No Tests selected</td>
                        </tr>
                        </table></div>";
                    }
                    
                }
            } else {
                $output=  "NO RECORD FOUND BY MOBILE NUMBER $pid ";
            }
            
            
            return $output;
        }
       
    }
}
