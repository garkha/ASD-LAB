<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\user;
use Hash;
use Mail;

class AuthController extends Controller
{
    //START LOGIN
    public function Login(){
        session()->pull('UserID');//DELETE SESSION VERIABLE
        session()->pull('otp');//DELETE SESSION VERIABLE
        session()->pull('LoginUser');//DELETE SESSION VERIABLE
        return view('auth.login');
    }
    public function loginUser(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = user::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('LoginUser', $user->id);
                return redirect('dashboard')->with('success', 'Login Success');
            }else{
                return Redirect()->back()->withInput()->with('failed', 'Password is incorrect');
            }

        }else{
            return Redirect()->back()->withInput()->with('failed', 'The emial Id is not Registered');
        }

    }//END LOGIN

    //STRAT REGISTRATION
    public function Registration(){
        return view('auth.register');
    }
    public function RegisterUser(Request $request){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => ['required','confirmed',Password::min(8)
            ->mixedCase()
            ->letters()
            ->numbers()
            ->symbols()
            ->uncompromised(),],
            'password_confirmation' => 'required|min:8',
        ]);
        $user = new user();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($user->save()){
            return redirect('success')->with('success', 'You have registered Successfuly');
        }else{
            return back()->with('fail', 'Somthing went worng');
        }
    }//END REGISTRATION

    //STRAT DASHBOARD
    public function dashboard(){
        $data = [];
        if(session()->has('LoginUser')){
            $data = user::where('id',session()->get('LoginUser'))->first();
            //$data = user::find(session()->get('LoginUser'));
            return view('auth.dashboard',compact('data'));
        }
        
    }//END- DASHBOARD

    //START LOG-OUT
    public function logout(){
        if(session()->has('LoginUser')){
            session()->pull('UserID');//DELETE SESSION VERIABLE
            session()->pull('otp');//DELETE SESSION VERIABLE
            session()->pull('LoginUser');//DELETE SESSION VERIABLE
            session()->pull('patient_id');//DELETE SESSION VERIABLE
            return redirect('success')->with('success','You have successfully Logout');
        }else{
            return redirect('login');
        }
    }//END LOG-OUT

    //ALL CLOSE
    public function Allclose(){
        session()->pull('UserID');
        session()->pull('otp');
        session()->pull('LoginUser');
        session()->pull('patient_id');//DELETE SESSION VERIABLE
        return Redirect('/');
    }//END ALL CLOSE

    //FORGET PASSWORD 
    public function ForgetPassword(){
        return view('auth.ForgetPassword');
    }
    public function CheckPassword(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        $user = user::where('email',$request->email)->first();
        
        if($user){
            $otp = mt_rand(1000,9999);
            $request->session()->put('otp', $otp);
             $request->session()->put('user_ID', $user->id);
            $data = [ 
                'otp'=>$otp,
            ];
             
            $senders = array('to'=>["$request->email"], 'sub'=>$data['otp']);
              Mail::send('auth.otp', $data, function($message) use($senders) {
              $message->to($senders['to'])->subject($senders['sub']);
            });
            return redirect('otp')->with('success',"OTP is send to $request->email");

        }else{
            return back()->with('failed',"$request->email is not registerd"); 
        }
        
    }

    public function OTP(Request $request){
       return view('auth.otp_verification');
    }
    public function CheckOtp(Request $request){
        if($request->otp == session()->get('otp')){
            return redirect('update_password');
            

        }else{
            return back()->with('failed',"You have enter a incorrect OTP , Please enter a correct OTP.");
        }
    }
    public function show_update_password(){
        return view('auth.update_password');
    }
    
    public function update_password(Request $request){
        $request->validate([
            'password' => ['required','confirmed',Password::min(8)
            ->mixedCase()
            ->letters()
            ->numbers()
            ->symbols()
            ->uncompromised(),],
            'password_confirmation' => 'required|min:8',
        ]);
        
        $user = user::find(session()->get('user_ID'));
        $user->password = Hash::make($request->password);
        if($user->save()){
            return redirect('success')->with('success','Your password is updated successfily. please login with your new password');
        }
        
    }


   
}
