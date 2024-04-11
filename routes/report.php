<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\testlistController;
use App\Http\Controllers\ReportController;
/*
|--------------------------------------------------------------------------
| Tets Report Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/add result value/{mv_name}/{patient_id}',[ReportController::class,'open_report_view']);
Route::post('/add result value/{mv_name}/{patient_id}',[ReportController::class,'submit_report']);

Route::get('/update result value/{mv_name}/{patient_id}',[ReportController::class,'open_update_view']);
Route::post('/update result value/{mv_name}/{patient_id}',[ReportController::class,'upate_report']);

Route::get('/download report/{mv_name}/{patient_id}',[ReportController::class,'download_report']);