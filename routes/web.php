<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[App\Http\Controllers\WebsiteController::class,'index']);
Route::get('/jenis_mentor/{category}',[App\Http\Controllers\WebsiteController::class,'jenis_mentor_detail']);
Route::post('/jenis_mentor/{category}', [App\Http\Controllers\WebsiteController::class,'search_jenis_mentor']);
Route::get('/pendaftaran_mentor',[App\Http\Controllers\WebsiteController::class,'pendaftaran_mentor']);



Route::get('/login',[App\Http\Controllers\LoginController::class,'index'])->middleware('guest')->name('login');
Route::post('/login',[App\Http\Controllers\LoginController::class,'authenticate']);
Route::get('/logout',[App\Http\Controllers\LoginController::class,'logout']);

// Route::get('/register',[App\Http\Controllers\RegisterController::class,'index'])->middleware('guest');
// Route::post('/register',[App\Http\Controllers\RegisterController::class,'store']);


Route::post('/daftar_mentor/create',[App\Http\Controllers\MentorController::class,'create']);
Route::get('pemesanan_mentor/{id}/detail',[App\Http\Controllers\MentorController::class,'pemesanan_mentor_detail']);
Route::get('pemesanan_mentor/{id}',[App\Http\Controllers\MentorController::class,'pemesanan_mentor']);
Route::post('pemesanan_mentor/store/{id}',[App\Http\Controllers\MentorController::class,'pemesanan_mentor_store']);
Route::get('update/status/{id}',[App\Http\Controllers\MentorController::class,'update_status_email']);


Route::get('pembatalan',[App\Http\Controllers\PembatalanController::class,'index']);
Route::post('pembatalan/store',[App\Http\Controllers\PembatalanController::class,'pembatalan_store']);

// Route::post('midtrans-callback',[App\Http\Controllers\MentorController::class,'callback']);


Route::get('/pembayaran', function () {
    return view('comming_soon');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('daftar_pendaftaran',[App\Http\Controllers\TrainerDashboardController::class,'daftar_pendaftaran']);
    Route::get('daftar_pendaftaran/{id}',[App\Http\Controllers\TrainerDashboardController::class,'daftar_pendaftaran_detail']);
    Route::post('daftar_pendaftaran/update/{id}',[App\Http\Controllers\TrainerDashboardController::class,'daftar_pendaftaran_update']);

    Route::get('daftar_pemesan',[App\Http\Controllers\TrainerDashboardController::class,'daftar_pemesan']);
    Route::get('daftar_pemesan/{id}',[App\Http\Controllers\TrainerDashboardController::class,'daftar_pemesan_detail']);
    Route::get('daftar_pembayaran',[App\Http\Controllers\TrainerDashboardController::class,'daftar_pembayaran']);
    Route::get('daftar_pembayaran/{id}',[App\Http\Controllers\TrainerDashboardController::class,'daftar_pembayaran_detail']);



});

Route::group(['middleware' => 'isAdmin'], function () {
Route::get('admin/dashboard',[App\Http\Controllers\DashboardController::class,'index']);
Route::get('admin/tambah_mentor',[App\Http\Controllers\MentorController::class,'tambah_mentor']);
Route::get('tambah_mentor_delete/{id}',[App\Http\Controllers\MentorController::class,'tambah_mentor_delete']);
Route::get('delete_pendaftaran_mentor/{id}',[App\Http\Controllers\MentorController::class,'delete_pendaftaran_mentor']);
Route::get('accept_pendaftaran_mentor/{id}',[App\Http\Controllers\MentorController::class,'accept_pendaftaran_mentor']);
Route::post('tambah_mentor_update/{id}',[App\Http\Controllers\MentorController::class,'tambah_mentor_update']);
Route::post('tambah_mentor_store',[App\Http\Controllers\MentorController::class,'tambah_mentor_store']);
Route::get('tambah_mentor_detail/{id}',[App\Http\Controllers\MentorController::class,'tambah_mentor_detail']);
Route::get('tambah_mentor_admin_edit/{id}',[App\Http\Controllers\MentorController::class,'tambah_mentor_edit']);



Route::get('admin/pemesanan',[App\Http\Controllers\PemesananController::class,'index']);
Route::get('pemesanan_delete/{id}',[App\Http\Controllers\PemesananController::class,'pemesanan_delete']);
Route::post('pemesanan_create',[App\Http\Controllers\PemesananController::class,'pemesanan_create']);
Route::get('pemesanan_edit/{id}',[App\Http\Controllers\PemesananController::class,'pemesanan_edit']);
Route::post('pemesanan_update/{id}',[App\Http\Controllers\PemesananController::class,'pemesanan_update']);
Route::get('pemesanan_cetak',[App\Http\Controllers\PemesananController::class,'cetak']);
Route::post('pemesanan_cetak_tanggal',[App\Http\Controllers\PemesananController::class,'pemesanan_cetak_tanggal']);

Route::get('invoice/{id}/pemesanan',[App\Http\Controllers\PemesananController::class,'invoice']);

Route::get('admin/pembayaran_trainer',[App\Http\Controllers\PembayaranTrainerController::class,'index']);
Route::post('tambah_pembayaran_trainer',[App\Http\Controllers\PembayaranTrainerController::class,'tambah_pembayaran_trainer']);
Route::get('edit_pembayaran_trainer/{id}',[App\Http\Controllers\PembayaranTrainerController::class,'edit_pembayaran_trainer']);
Route::post('pembayaran_trainer_update/{id}',[App\Http\Controllers\PembayaranTrainerController::class,'pembayaran_trainer_update']);
Route::get('pembayaran_trainer_delete/{id}',[App\Http\Controllers\PembayaranTrainerController::class,'pembayaran_trainer_delete']);
Route::post('pembayaran_trainer_cetak_tanggal',[App\Http\Controllers\PembayaranTrainerController::class,'pembayaran_trainer_cetak_tanggal']);


Route::get('admin/daftar_login_trainer',[App\Http\Controllers\LoginTrainerController::class,'index']);
Route::post('admin/daftar_login_trainer/create',[App\Http\Controllers\LoginTrainerController::class,'create']);
Route::get('admin/daftar_login_trainer/delete/{id}',[App\Http\Controllers\LoginTrainerController::class,'delete']);



Route::get('admin/pembatalan',[App\Http\Controllers\PembatalanController::class,'index_admin']);
Route::get('pembatalan_delete/{id}',[App\Http\Controllers\PembatalanController::class,'pembatalan_delete']);
Route::get('pembatalan_edit/{id}',[App\Http\Controllers\PembatalanController::class,'pembatalan_edit']);
Route::post('pembatalan_update/{id}',[App\Http\Controllers\PembatalanController::class,'pembatalan_update']);
});
