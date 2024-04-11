<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\download_online_reportController;
use App\Http\Controllers\ReportController;
/*
|--------------------------------------------------------------------------
| Download online Routes
|--------------------------------------------------------------------------
|
*/

Route::get('download_online_reports',[download_online_reportController::class,'download_online_reports'])->name('download_online_reports');
Route::get('download_online_reports_mobile',[download_online_reportController::class,'download_online_reports_mobile'])->name('download_online_reports_mobile');
Route::get('/download online gest reports/{modelname}/{patient_id}',[ReportController::class,'download_report']);