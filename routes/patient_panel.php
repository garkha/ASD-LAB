<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientPanelContoller;
/*
|--------------------------------------------------------------------------
| Patient panel Routes
|--------------------------------------------------------------------------
|
*/

Route::get('patient_panel/{patient_id}',[PatientPanelContoller::class,'get_patient'])->name('patient_panel');