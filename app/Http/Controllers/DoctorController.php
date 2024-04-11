<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\patient;
use App\Models\user;

class DoctorController extends Controller
{
    //ADD DOCTOR 
    public function show_doctor(){
        $search = doctor::all();
        return view('doctor.doctor',['doctors'=>$search]);
    }

    public function doctor(Request $request){
        $request->validate([
            'name' => 'required|string',
        ]);
        
        $array = str_split(strtolower($request->name));
        $lenght = count($array);
        $newarray = [];
        if ($array[0]=="d" && $array[1]=="r" && $array[2]==".") {
            for ($i=0; $i < ($lenght-3); $i++) { 
                $newarray[$i] = $array[$i+3];
            }
            $new_string = trim(implode("",$newarray));
        } else {
            $new_string = trim(strtolower($request->name));
        }
        
        

        $search = doctor::where('name',$new_string)->first();
        
        if($search){
            return redirect('doctors')->with('fail', $search->name.' Allready Exists');
        }else{
            $user = user::find(session()->get('LoginUser'));
            $data = new doctor();
            $data->name = $new_string;

            if($user->doctor()->save($data)){
                return redirect('doctors')->with('success',"$data->name saved Successfull..");
            }else{
                return redirect('doctors')->with('fail','Somthing went worng');
            }
        } 
        
    }//END ADD DOCTOR 

    //DELETE DOCTOR
    public function delete_doctor($id){
        $data = doctor::find(convert_uudecode($id));
        if(doctor::find(convert_uudecode($id))->delete()){
            return redirect('doctors')->with('success', "$data->name 'Deleted !");
        }else{
            return redirect('doctors')->with('fail',"$data->name somthing went worng ! ");
        }
    }//END DELETE DOCTOR

    //UPDATE DOCTOR
    public function update_doctor($id){
        $data = doctor::find(convert_uudecode($id));
        return view('doctor.update_doctor',['doctor'=>$data]);
    }
    
    public function doctor_update(Request $request){
        $request->validate([
            'name' => 'required|string',
        ]);

        $array = str_split(strtolower($request->name));
        $lenght = count($array);
        $newarray = [];
        if ($array[0]=="d" && $array[1]=="r" && $array[2]==".") {
            for ($i=0; $i < ($lenght-3); $i++) { 
                $newarray[$i] = $array[$i+3];
            }
            $new_string = trim(implode("",$newarray));
        } else {
            $new_string = trim(strtolower($request->name));
        }


        $doctor = $data = doctor::find($request->id);
        $doctor->name = $new_string;
        if($doctor->save()){
            return redirect('doctors')->with('success','Dr.'.$request->name. ' Update Successfully!');
        }else{
            return redirect('doctors')->with('fail','Dr.'.$data->name. ' somthing went worng!');
        }

    }//END UPDATE DOCTOR

    //DOCTOR LIST SEARCH AJAX
    public function get_doctor_list(Request $request){
        if($request->ajax()){
            $words = $request->search;
            $doctors = doctor::where('user_id',$request->session()->get('LoginUser'))->where('name','LIKE',$words.'%')->get();
            $output = '<table>
                <tr>
                    <th>SN</th>
                    <th>Doctor Name</th>
                    <th colspan="2">Action</th>
                </tr>
            ';
            if(count($doctors)>0){
                $sn = 0;
                foreach ($doctors as  $doctor) {
                    ++$sn;
                    $id= "update doctor/".convert_uuencode($doctor->id);
                    $output .= "<tr data-href=#>
                        <td>$sn</td>
                        <td>$doctor->name</td>
                        <td><a href='$id'>Delete</a></td>
                        <td><a href='$id'>Update</a></td>
                    </tr>";
                }
                return $output;
            }else{
                $output .= '
                   <tr>
                      <th colspan="4">NO RECORD FOUND</th>
                   </tr>
                ';
                return $output;
            }
            
           
        }
    }
}
