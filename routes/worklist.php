<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorklistController;


/*
|--------------------------------------------------------------------------
| WORKLIST Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/worklist',[WorklistController::class,'show_worklist_page']);
//AJAX REQUEST GET PATIENT LIST ON SELECTED DATE
Route::get('/get_patient_list',[WorklistController::class,'get_patient_list'])->name('get_patient_list');
Route::get('/search_patient',[WorklistController::class,'search_patient'])->name('search_patient');
