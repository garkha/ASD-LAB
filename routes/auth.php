<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Login Authantication Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/login',[AuthController::class,'Login'])->middleware('AllreadyLogin');
Route::post('/loginUser',[AuthController::class,'loginUser'])->name('loginUser');

Route::get('/register',[AuthController::class,'Registration'])->middleware('AllreadyLogin');
Route::post('/registerUser',[AuthController::class,'RegisterUser'])->name('registerUser');

Route::get('dashboard',[AuthController::class,'dashboard'])->middleware('IsLogin');
Route::get('logout',[AuthController::class,'logout'])->middleware('IsLogin');

Route::get('allClose',[AuthController::class,'Allclose']);

/*
|--------------------------------------------------------------------------
| Login Authantication Routes
|--------------------------------------------------------------------------
|
*/

/*
|--------------------------------------------------------------------------
| Forget Password Routes
|--------------------------------------------------------------------------
|
*/
Route::get('ForgetPassword',[AuthController::class,'ForgetPassword']);
Route::post('ForgetPassword',[AuthController::class,'CheckPassword']);
Route::get('otp',[AuthController::class,'OTP']);
Route::post('otp',[AuthController::class,'CheckOtp']);
Route::get('update_password',[AuthController::class,'show_update_password']);
Route::post('update_password',[AuthController::class,'update_password'])->name('update_password');

/*
|--------------------------------------------------------------------------
| Forget Password Routes
|--------------------------------------------------------------------------
|
*/