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
    Route::get('/Sadmin_akomodasi/tambah', [App\Http\Controllers\Sadmin\AkomodasiController::class, 'tambah'])->name('tambah_akomodasi');
    Route::post('/Sadmin_akomodasi/aksi_tambah', [App\Http\Controllers\Sadmin\AkomodasiController::class, 'aksi_tambah'])->name('aksi_tambah');
    Route::get('/Sadmin_akomodasi/update/{id}', [App\Http\Controllers\Sadmin\AkomodasiController::class, 'update'])->name('update_akomodasi');
    Route::post('/Sadmin_akomodasi/aksi_update/{id}', [App\Http\Controllers\Sadmin\AkomodasiController::class, 'aksi_update'])->name('aksi_update');
    Route::get('/Sadmin_akomodasi/aksi_delete/{id}', [App\Http\Controllers\Sadmin\AkomodasiController::class, 'aksi_delete'])->name('aksi_delete');
    //Galeri
    Route::get('/Sadmin_galeri', [App\Http\Controllers\Sadmin\GaleriController::class, 'index'])->name('galeri');
    Route::get('/Sadmin_galeri/tambah', [App\Http\Controllers\Sadmin\GaleriController::class, 'tambah'])->name('tambah_galeri');
    Route::post('/Sadmin_galeri/aksi_tambah', [App\Http\Controllers\Sadmin\GaleriController::class, 'aksi_tambah'])->name('aksi_tambah');
    Route::get('/Sadmin_galeri/update/{id}', [App\Http\Controllers\Sadmin\GaleriController::class, 'update'])->name('update_galeri');
    Route::post('/Sadmin_galeri/aksi_update/{id}', [App\Http\Controllers\Sadmin\GaleriController::class, 'aksi_update'])->name('aksi_update');
    Route::get('/Sadmin_galeri/aksi_delete/{id}', [App\Http\Controllers\Sadmin\GaleriController::class, 'aksi_delete'])->name('aksi_delete');
    //Hakakses
    Route::get('/Sadmin_hakakses', [App\Http\Controllers\Sadmin\HakaksesController::class, 'index'])->name('hakakses');
    Route::post('/Sadmin_hakakses/aksi_tambah', [App\Http\Controllers\Sadmin\HakaksesController::class, 'aksi_tambah'])->name('aksi_tambah');
    Route::get('/Sadmin_hakakses/update/{id}', [App\Http\Controllers\Sadmin\HakaksesController::class, 'update'])->name('update_hakakses');
    Route::post('/Sadmin_hakakses/aksi_update/{id}', [App\Http\Controllers\Sadmin\HakaksesController::class, 'aksi_update'])->name('aksi_update');
    Route::get('/Sadmin_hakakses/aksi_delete/{id}', [App\Http\Controllers\Sadmin\HakaksesController::class, 'aksi_delete'])->name('aksi_delete');
    //Testimoni
    Route::get('/Sadmin_ulasan', [App\Http\Controllers\Sadmin\UlasanController::class, 'index'])->name('testimoni');
    Route::post('/Sadmin_ulasan/aksi_tambah', [App\Http\Controllers\Sadmin\UlasanController::class, 'aksi_tambah'])->name('aksi_tambah');
    Route::get('/Sadmin_ulasan/update/{id}', [App\Http\Controllers\Sadmin\UlasanController::class, 'update'])->name('update_testimoni');
    Route::post('/Sadmin_ulasan/aksi_update/{id}', [App\Http\Controllers\Sadmin\UlasanController::class, 'aksi_update'])->name('aksi_update');
    Route::get('/Sadmin_ulasan/aksi_delete/{id}', [App\Http\Controllers\Sadmin\UlasanController::class, 'aksi_delete'])->name('aksi_delete');
});

//Hak akses admin
Route::group(['middleware' => ['auth','CheckRole:1']], function(){
    Route::get('/Admin_beranda', [App\Http\Controllers\Admin\BerandaController::class, 'index'])->name('beranda');
    //Event
    Route::get('/Admin_event', [App\Http\Controllers\Admin\EventController::class, 'index'])->name('event');
    Route::get('/Admin_event/tambah', [App\Http\Controllers\Admin\EventController::class, 'tambah'])->name('tambah_event');
    Route::post('/Admin_event/aksi_tambah', [App\Http\Controllers\Admin\EventController::class, 'aksi_tambah'])->name('aksi_tambah');
    Route::get('/Admin_event/update/{id}', [App\Http\Controllers\Admin\EventController::class, 'update'])->name('update_event');
    Route::post('/Admin_event/aksi_update/{id}', [App\Http\Controllers\Admin\EventController::class, 'aksi_update'])->name('aksi_update');
    Route::get('/Admin_event/aksi_delete/{id}', [App\Http\Controllers\Admin\EventController::class, 'aksi_delete'])->name('aksi_delete');
    //Kuliner
    Route::get('/Admin_kuliner', [App\Http\Controllers\Admin\KulinerController::class, 'index'])->name('kuliner');
    Route::get('/Admin_kuliner/tambah', [App\Http\Controllers\Admin\KulinerController::class, 'tambah'])->name('tambah_kuliner');
    Route::post('/Admin_kuliner/aksi_tambah', [App\Http\Controllers\Admin\KulinerController::class, 'aksi_tambah'])->name('aksi_tambah');
    Route::get('/Admin_kuliner/update/{id}', [App\Http\Controllers\Admin\KulinerController::class, 'update'])->name('update_kuliner');
    Route::post('/Admin_kuliner/aksi_update/{id}', [App\Http\Controllers\Admin\KulinerController::class, 'aksi_update'])->name('aksi_update');
    Route::get('/Admin_kuliner/aksi_delete/{id}', [App\Http\Controllers\Admin\KulinerController::class, 'aksi_delete'])->name('aksi_delete');
    //Akomodasi
    Route::get('/Admin_akomodasi', [App\Http\Controllers\Admin\AkomodasiController::class, 'index'])->name('akomodasi');
    Route::get('/Admin_akomodasi/tambah', [App\Http\Controllers\Admin\AkomodasiController::class, 'tambah'])->name('tambah_akomodasi');
    Route::post('/Admin_akomodasi/aksi_tambah', [App\Http\Controllers\Admin\AkomodasiController::class, 'aksi_tambah'])->name('aksi_tambah');
    Route::get('/Admin_akomodasi/update/{id}', [App\Http\Controllers\Admin\AkomodasiController::class, 'update'])->name('update_akomodasi');
    Route::post('/Admin_akomodasi/aksi_update/{id}', [App\Http\Controllers\Admin\AkomodasiController::class, 'aksi_update'])->name('aksi_update');
    Route::get('/Admin_akomodasi/aksi_delete/{id}', [App\Http\Controllers\Admin\AkomodasiController::class, 'aksi_delete'])->name('aksi_delete');
    //Galeri
    Route::get('/Admin_galeri', [App\Http\Controllers\Admin\GaleriController::class, 'index'])->name('galeri');
    Route::get('/Admin_galeri/tambah', [App\Http\Controllers\Admin\GaleriController::class, 'tambah'])->name('tambah_galeri');
    Route::post('/Admin_galeri/aksi_tambah', [App\Http\Controllers\Admin\GaleriController::class, 'aksi_tambah'])->name('aksi_tambah');
    Route::get('/Admin_galeri/update/{id}', [App\Http\Controllers\Admin\GaleriController::class, 'update'])->name('update_galeri');
    Route::post('/Admin_galeri/aksi_update/{id}', [App\Http\Controllers\Admin\GaleriController::class, 'aksi_update'])->name('aksi_update');
    Route::get('/Admin_galeri/aksi_delete/{id}', [App\Http\Controllers\Admin\GaleriController::class, 'aksi_delete'])->name('aksi_delete');
    //Testimoni
    Route::get('/Admin_ulasan', [App\Http\Controllers\Admin\UlasanController::class, 'index'])->name('testimoni');
    Route::post('/Admin_ulasan/aksi_tambah', [App\Http\Controllers\Admin\UlasanController::class, 'aksi_tambah'])->name('aksi_tambah');
    Route::get('/Admin_ulasan/update/{id}', [App\Http\Controllers\Admin\UlasanController::class, 'update'])->name('update_testimoni');
    Route::post('/Admin_ulasan/aksi_update/{id}', [App\Http\Controllers\Admin\UlasanController::class, 'aksi_update'])->name('aksi_update');
    Route::get('/Admin_ulasan/aksi_delete/{id}', [App\Http\Controllers\Admin\UlasanController::class, 'aksi_delete'])->name('aksi_delete');
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
