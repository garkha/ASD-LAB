<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\testlistController;
use App\Http\Controllers\InvestigationsController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
|INVESTIGATION Authantication Routes
|--------------------------------------------------------------------------
|
*/
Route::get('test list',[TestController::class,'view_test']);
Route::post('test list',[TestController::class,'add_test']);
Route::get('/investigations_data',[TestController::class,'get_test_list'])->name('show_investigations');
Route::get('/searchInvestigation',[TestController::class,'searchInvestigation'])->name('searchInvestigation');
Route::get('/update_investigation/{investigation_id}',[TestController::class,'update_investigation']);
Route::get('update_investigation_test',[TestController::class,'update_investigation_test'])->name('update_investigation_test');

