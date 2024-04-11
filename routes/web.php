<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MailController;


Route::get('/', function () {
    return view('welcome');
});
Route::post('/home collection', function(){
    return view('welcome');
});




require __DIR__.'/download_online_report.php';
require __DIR__.'/invoice.php';
require __DIR__.'/auth.php';
Route::group(['middleware'=>['LoginUser']], function(){
   
    require __DIR__.'/patient.php';
    require __DIR__.'/worklist.php';
    require __DIR__.'/patient_panel.php';
    require __DIR__.'/investigation.php';
    require __DIR__.'/doctor.php';
    require __DIR__.'/report.php';

});


//contact+bookapointment
Route::post('/contact_us_form', [MailController::class, 'contact_us']);
Route::post('/book_appointment',[MailController::class, 'make_appointment']);
Route::post('/subscribe',function(){
    return view('welcome');
});
// END contact+bookapointment

Route::get('reboot',function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('key:generate');
    return "system reboot";
  });

route::get('success', function(){
    return view('auth.success_message');
});






