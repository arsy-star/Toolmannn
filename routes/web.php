<?php

use App\Http\Controllers\Dashboard\Dashboardcontroller;
use App\Http\Controllers\Login\Logincontroller;
use App\Http\Controllers\Register\Registrasicontroller;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',[Dashboardcontroller::class,'Dashboard'])->name('dashboard');

Route::get('/registrasi',[Registrasicontroller::class,'Regis'])->name('/registrasi');
Route::post('/registrasi',[Registrasicontroller::class,'store']);

Route::get('/login',[Logincontroller::class,'Login']);
Route::post('/login',[Logincontroller::class,'store'])->name('login');

Route::get('/dashboard_admin',[Dashboardcontroller::class,'Admin'])->name('dashboard_admin');
