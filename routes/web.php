<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/proses_login', [App\Http\Controllers\AuthController::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

//Hak akses super admin
Route::group(['middleware' => ['auth','CheckRole:0']], function(){
    Route::get('/Sadmin_beranda', [App\Http\Controllers\Sadmin\BerandaController::class, 'index'])->name('beranda');
    Route::get('/Sadmin_event', [App\Http\Controllers\Sadmin\EventController::class, 'index'])->name('event');
});

//Hak akses admin
Route::group(['middleware' => ['auth','CheckRole:1']], function(){
    Route::get('/Admin_beranda', [App\Http\Controllers\Admin\BerandaController::class, 'index'])->name('beranda');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
