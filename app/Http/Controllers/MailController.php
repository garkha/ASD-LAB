<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Appointment;
use Mail;

class MailController extends Controller
{
    public function contact_us(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->mobile = $request->mobile;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        
        $data = [ 
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'sub'=>$request->subject,
            'msg'=>$request->message,
        ];
         
        $senders = array('to'=>['ranjanmahto97@gmail.com','info@asd.online','a.sharmadiagnostic@gmail.com'], 'sub'=>$data['sub']);
          Mail::send('contact_us_mail', $data, function($message) use($senders) {
          $message->to($senders['to'])->subject($senders['sub']);
        });

        return redirect('/#contact')->with('message_status', 'Your message has been sent. Thank you!');

    }


    public function make_appointment(Request $req){

        $mydate = explode('-',$req->date);
        $dd = $mydate[0];
        $mm = $mydate[1];
        $yy = $mydate[2];
        $newdate = $yy."-".$mm."-".$dd;

        $locaion="";

        if($req->file('Doctor_prescription')){
            $filename = time()."asd.". $req->file('Doctor_prescription')->getClientOriginalExtension();
            $locaion = $req->file('Doctor_prescription')->storeAs('doctor_prescription',$filename);

            $appointment = new Appointment();
            $appointment->name = $req->name;
            $appointment->mobile = $req->mobile;
            $appointment->email = $req->email;
            $appointment->date = $newdate; 
            $appointment->time = $req->time;
            $appointment->message = $req->message;
            $appointment->prescription = $locaion;
            $appointment->save();

            $data = [ 
                'name'=>$req->name,
                'mobile'=>$req->mobile,
                'email'=>$req->email,
                'date'=>$req->date,
                'time'=>$req->time,
                'msg'=>$req->message,
                'location'=>$locaion,
            ];
            
            $files = $req->file('Doctor_prescription');
             
            $senders = array('to'=>['ranjanmahto97@gmail.com','info@asd.online','manishkumarmehto7964@gmail.com','a.sharmadiagnostic@gmail.com'], 'sub'=>"Appointment");
            Mail::send('appointment_mail', $data, function($message) use($senders,$files) {
              $message->to($senders['to'])->subject($senders['sub']);
              $message->attach( $files->getRealPath(), array('as' => $files->getClientOriginalName(),'mime' => $files->getMimeType()));
            });
            
            return redirect('/#appointment')->with('message_status', 'Your request for appoinment is send to the admin please wait 1 hours for the conformation from admin. Our executive will call you shortly. Thank you!');

        }else{
            $appointment = new Appointment();
            $appointment->name = $req->name;
            $appointment->mobile = $req->mobile;
            $appointment->email = $req->email;
            $appointment->date = $newdate; 
            $appointment->time = $req->time;
            $appointment->message = $req->message;
            $appointment->prescription = $locaion;
            $appointment->save();
            
            $data = [ 
                'name'=>$req->name,
                'mobile'=>$req->mobile,
                'email'=>$req->email,
                'date'=>$req->date,
                'time'=>$req->time,
                'msg'=>$req->message,
            ];
            
            $senders = array('to'=>['ranjanmahto97@gmail.com','info@asd.online','manishkumarmehto7964@gmail.com','a.sharmadiagnostic@gmail.com'], 'sub'=>"Appointment");
            Mail::send('appointment_mail', $data, function($message) use($senders) {
              $message->to($senders['to'])->subject($senders['sub']);
            });
            
            return redirect('/#appointment')->with('message_status', 'Your request for appoinment is send to the admin please wait 1 hours for the conformation from admin. Our executive will call you shortly. Thank you!');
        }
        
    }
}
