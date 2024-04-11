<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\testlistController;
/*
|--------------------------------------------------------------------------
| Patient Routes
|--------------------------------------------------------------------------
|
*/
Route::get('register new patient',[PatientController::class, 'register_new_patient']);
Route::post('register new patient',[PatientController::class, 'new_patient']);
Route::get('investigation',[PatientController::class, 'show_investigation']);
Route::get('/close investigation',[PatientController::class, 'delete_session']);

//AJAX REQUEST
Route::get('/investigations',[testlistController::class, 'find_test'])->name('findtest');
Route::get('/addtest',[testlistController::class, 'add_test'])->name('addtest');
Route::get('/showtest',[testlistController::class, 'show_test'])->name('showtest');

//DELETE TEST FROM PATIENT TESTLIST
Route::get('/delete/{id}',[testlistController::class, 'delete_test']);

//UPDATE TEST PRICE FROM PATIENT TESTLIST
Route::get('update_price/{test_id}/{price}',[testlistController::class, 'update_test']);

//UPDATE PATIENT DETAILS
Route::get('update patient details',[PatientController::class,'update_patient_details']);
Route::post('update patient details',[PatientController::class,'update_patient']);
