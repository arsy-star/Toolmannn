<?php

use App\Http\Controllers\Dashboard\Dashboardcontroller;
use App\Http\Controllers\Item\Itemcontroller;
use App\Http\Controllers\Borrowing\Borrowingcontroller;
use App\Http\Controllers\Dashboard\Dashboard_admin\Admincontroller;
use App\Http\Controllers\Login\Logincontroller;
use App\Http\Controllers\Register\Registrasicontroller;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/registrasi',[Registrasicontroller::class,'Regis'])->name('registrasi');
Route::post('/registrasi',[Registrasicontroller::class,'store']);

Route::get('/login',[Logincontroller::class,'Login'])->name('login');
Route::post('/login',[Logincontroller::class,'store']);

Route::get('/dashboard_admin',[Dashboardcontroller::class,'Admin'])->name('dashboard_admin');

Route::get('/input_admin',[Admincontroller::class,'create'])->name('input_admin');
Route::post('/input_admin',[Admincontroller::class,'store'])->name('input_admin.store');


Route::get('/dashboard_user',[Dashboardcontroller::class,'User'])->name('dashboard_user');

Route::get('/Item',[itemcontroller::class,'Read'])->name('item.index');

Route::get('/borrowing',[Borrowingcontroller::class,'index'])->name('borrowing');

