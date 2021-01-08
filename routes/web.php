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
    //Event
    Route::get('/Sadmin_event', [App\Http\Controllers\Sadmin\EventController::class, 'index'])->name('event');
    Route::get('/Sadmin_event/tambah', [App\Http\Controllers\Sadmin\EventController::class, 'tambah'])->name('tambah_event');
    Route::post('/Sadmin_event/aksi_tambah', [App\Http\Controllers\Sadmin\EventController::class, 'aksi_tambah'])->name('aksi_tambah');
    Route::get('/Sadmin_event/update/{id}', [App\Http\Controllers\Sadmin\EventController::class, 'update'])->name('update_event');
    Route::post('/Sadmin_event/aksi_update/{id}', [App\Http\Controllers\Sadmin\EventController::class, 'aksi_update'])->name('aksi_update');
    Route::get('/Sadmin_event/aksi_delete/{id}', [App\Http\Controllers\Sadmin\EventController::class, 'aksi_delete'])->name('aksi_delete');

    //Route::get('/Sadmin_event/aksi_update/{id}', [App\Http\Controllers\Sadmin\EventController::class, 'aksi_update'])->name('aksi_update');

    //Kuliner
    Route::get('/Sadmin_kuliner', [App\Http\Controllers\Sadmin\KulinerController::class, 'index'])->name('kuliner');
    Route::get('/Sadmin_kuliner/tambah', [App\Http\Controllers\Sadmin\KulinerController::class, 'tambah'])->name('tambah_kuliner');
    Route::post('/Sadmin_kuliner/aksi_tambah', [App\Http\Controllers\Sadmin\KulinerController::class, 'aksi_tambah'])->name('aksi_tambah');
    Route::get('/Sadmin_kuliner/update/{id}', [App\Http\Controllers\Sadmin\KulinerController::class, 'update'])->name('update_kuliner');
    Route::post('/Sadmin_kuliner/aksi_update/{id}', [App\Http\Controllers\Sadmin\KulinerController::class, 'aksi_update'])->name('aksi_update');
    Route::get('/Sadmin_kuliner/aksi_delete/{id}', [App\Http\Controllers\Sadmin\KulinerController::class, 'aksi_delete'])->name('aksi_delete');
    //Akomodasi
    Route::get('/Sadmin_akomodasi', [App\Http\Controllers\Sadmin\AkomodasiController::class, 'index'])->name('akomodasi');
});

//Hak akses admin
Route::group(['middleware' => ['auth','CheckRole:1']], function(){
    Route::get('/Admin_beranda', [App\Http\Controllers\Admin\BerandaController::class, 'index'])->name('beranda');
});

//Hak akses user
Route::group(['middleware' => ['auth','CheckRole:2']], function(){
    // Route::get('/beranda', [App\Http\Controllers\User\BerandaController::class, 'index'])->name('beranda');
    // Route::get('/event', [App\Http\Controllers\User\EventController::class, 'index'])->name('event');
    // Route::get('/kuliner', [App\Http\Controllers\User\BerandaController::class, 'kuliner'])->name('kulner');
    // Route::get('/akomodasi', [App\Http\Controllers\User\BerandaController::class, 'akomodasi'])->name('akomodasi');
    // Route::get('/tentang_kami', [App\Http\Controllers\User\BerandaController::class, 'tentang_kami'])->name('tentang_kami');
    // Route::get('/testimoni', [App\Http\Controllers\User\BerandaController::class, 'testimoni'])->name('testimoni');
});

//Hak akses all user/non user
Route::prefix('/')->group(function(){
    Route::get('beranda', [App\Http\Controllers\User\BerandaController::class, 'index'])->name('beranda');
    Route::get('event', [App\Http\Controllers\User\EventController::class, 'index'])->name('event');
    Route::get('kuliner', [App\Http\Controllers\User\KulinerController::class, 'index'])->name('kulner');
    Route::get('akomodasi', [App\Http\Controllers\User\AkomodasiController::class, 'index'])->name('akomodasi');
    Route::get('tentang_kami', [App\Http\Controllers\User\Tentang_kamiController::class, 'index'])->name('tentang_kami');
    Route::get('testimoni', [App\Http\Controllers\User\TestimoniController::class, 'index'])->name('testimoni');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
