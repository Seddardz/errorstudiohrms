<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EmployeesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class,'index']);
Route::get('forgot-password',[AuthController::class,'forgot_password']);
Route::get('register',[AuthController::class,'register']);
Route::post('register_post',[AuthController::class,'register_post']);
Route::post('checkemail',[AuthController::class,'CheckEmail']);

Route::post('login_post',[AuthController::class,'login_post']);

//ROUTE || HR SAME NAME
Route::group(['middleware'=>'admin'],function(){
    Route::get ('admin/dashboard',[DashboardController::class,'dashboard']);
    Route::get ('admin/employees',[EmployeesController::class,'index']);
    Route::get ('admin/employees/add',[EmployeesController::class,'add']);
    Route::post ('admin/employees/add',[EmployeesController::class,'add_post']);
});

Route::get('logout',[AuthController::class,'logout']);