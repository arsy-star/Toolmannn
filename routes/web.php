<?php

use App\Http\Controllers\Dashboard\Dashboardcontroller;
use App\Http\Controllers\Dashboard\Dashboard_User\Dashboard_Usercontroller;
use App\Http\Controllers\Item\Itemcontroller;
use App\Http\Controllers\Borrowing\Borrowingcontroller;
use App\Http\Controllers\Dashboard\Dashboard_admin\Admincontroller;
use App\Http\Controllers\Dashboard\Dashboard_operator\Operatorcontroller;
use App\Http\Controllers\Login\Logincontroller;
use App\Http\Controllers\Register\Registrasicontroller;
use Illuminate\Auth\Events\Logout;
//use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Constraint\Operator;
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


Route::get('/dashboard_admin',[Admincontroller::class,'Admin'])->name('dashboard_admin');

Route::get('/input_admin',[Admincontroller::class,'create'])->name('input_admin');
Route::post('/input_admin',[Admincontroller::class,'store'])->name('input_admin.store');


Route::get('/dashboard_user',[Dashboard_Usercontroller::class,'User'])->name('dashboard_user');

Route::get('/Item',[itemcontroller::class,'Read'])->name('item.index');
Route::get('/Item_coba',[itemcontroller::class,'Readd'])->name('item.indexx');
route::get('/items',[Itemcontroller::class,'readdd'])->name('items');

Route::get('/borrowing',[Borrowingcontroller::class,'index'])->name('borrowing');
Route::get('/cobaaa',[Borrowingcontroller::class,'inndex'])->name('cobaaa');
route::get('/items',[Itemcontroller::class,'rea'])->name('items');

Route::get('/borrowing',[Borrowingcontroller::class,'index'])->name('borrowing');
Route::get('/cobaaa',[Borrowingcontroller::class,'inndex'])->name('cobaaa');

Route::post('/borrowing',[Borrowingcontroller::class,'store'])->name('borrowing.store');


Route::post('/borrowing',[Borrowingcontroller::class,'store'])->name('borrowing.store');

Route::get('/login',[Logincontroller::class,'Login'])->name('login');
route::post('/login',[Logincontroller::class,'store']);


route::get('/logout',[Logincontroller::class,'logout'])->name('logout');








route::group(['middleware'=> 'auth:admin'], function (){
    Route::get('/dashboard_admin', [AdminController::class, 'Admin'])->name('dashboard_admin');
});

route::group(['middleware'=> 'auth:operator'], function (){
    route::get('/dashboard_operator',[Operatorcontroller::class,'Operator'])->name('dashboard_operator');
});

route::group(['middleware'=> 'auth:user'], function (){
    Route::get('/dashboard_user', [Dashboard_Usercontroller::class, 'User'])->name('dashboard_user');
});


// route::middleware(['guest'])->group(function (){
   

// } );

// route::get('/home', function(){
//     return redirect('dashboard_admin');
// });

// route::middleware(['auth'])->group(function () {
   
// });

// Route::get('/dashboard_admin', [AdminController::class, 'Admin'])->name('dashboard_admin');

// Route::get('/dashboard_admin', function () {
//     return redirect('dashboard_admin');
// })->middleware('role:admin');

route::get('/logout',[Logincontroller::class,'logout'])->name('logout');
route::post('/logout',[Logincontroller::class,'logout']);