<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorInvoiceController;
/*
|--------------------------------------------------------------------------
| Manage Doctors ---VIEW---INSERT---UPDATE Routes
|--------------------------------------------------------------------------
|
*/

Route::get('doctors',[DoctorController::class,'show_doctor']);
Route::post('doctors',[DoctorController::class,'doctor']);

Route::get('delect doctor/{id}',[DoctorController::class,'delete_doctor']);
Route::get('update doctor/{id}',[DoctorController::class,'update_doctor']);
Route::post('update doctor/{id}',[DoctorController::class,'doctor_update']);
Route::get('get_doctor_list',[DoctorController::class,'get_doctor_list'])->name('get_doctor_list');

/*
|--------------------------------------------------------------------------
| Doctors INVOICE Routes
|--------------------------------------------------------------------------
|
*/
Route::get('doctors invoice',[DoctorInvoiceController::class,'GetInvoice']);
Route::get('get_doctor_invoice',[DoctorInvoiceController::class,'get_doctor_invoice'])->name('get_doctor_invoice');
Route::get('/download_doctor_statement/{from_date}/{to_date}/{doctor}',[DoctorInvoiceController::class,'download_invoice']);