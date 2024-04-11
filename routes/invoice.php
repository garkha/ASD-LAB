<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
/*
|--------------------------------------------------------------------------
| Patient panel Routes
|--------------------------------------------------------------------------
|
*/

Route::get('invoice',[InvoiceController::class,'make_invoice']);
Route::get('invoice/{patient_id}',[InvoiceController::class,'gest_invoice']);
