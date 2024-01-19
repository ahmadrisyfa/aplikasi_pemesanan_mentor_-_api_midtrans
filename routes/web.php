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


Route::post('/daftar_mentor/create',[App\Http\Controllers\MentorController::class,'create']);

Route::get('/login',[App\Http\Controllers\LoginController::class,'index'])->middleware('guest');
Route::post('/login',[App\Http\Controllers\LoginController::class,'authenticate']);
Route::get('/logout',[App\Http\Controllers\LoginController::class,'logout']);

// Route::get('/register',[App\Http\Controllers\RegisterController::class,'index'])->middleware('guest');
// Route::post('/register',[App\Http\Controllers\RegisterController::class,'store']);


Route::get('pemesanan_mentor/{id}/detail',[App\Http\Controllers\MentorController::class,'pemesanan_mentor_detail']);
Route::post('pemesanan_mentor/store',[App\Http\Controllers\MentorController::class,'pemesanan_mentor_store']);
Route::get('pemesanan_mentor/{id}',[App\Http\Controllers\MentorController::class,'pemesanan_mentor']);


Route::get('pembatalan',[App\Http\Controllers\PembatalanController::class,'index']);
Route::post('pembatalan/store',[App\Http\Controllers\PembatalanController::class,'pembatalan_store']);

// Route::post('midtrans-callback',[App\Http\Controllers\MentorController::class,'callback']);


Route::get('/pembayaran', function () {
    return view('comming_soon');
});


Route::group(['middleware' => 'isAdmin'], function () {
Route::get('admin/dashboard',[App\Http\Controllers\DashboardController::class,'index']);
Route::get('admin/tambah_mentor',[App\Http\Controllers\MentorController::class,'tambah_mentor']);
Route::get('tambah_mentor_delete/{id}',[App\Http\Controllers\MentorController::class,'tambah_mentor_delete']);
Route::post('tambah_mentor_update/{id}',[App\Http\Controllers\MentorController::class,'tambah_mentor_update']);
Route::post('tambah_mentor_store',[App\Http\Controllers\MentorController::class,'tambah_mentor_store']);
Route::get('tambah_mentor_detail/{id}',[App\Http\Controllers\MentorController::class,'tambah_mentor_detail']);
Route::get('tambah_mentor_admin_edit/{id}',[App\Http\Controllers\MentorController::class,'tambah_mentor_edit']);



Route::get('admin/pemesanan',[App\Http\Controllers\PemesananController::class,'index']);
Route::get('pemesanan_delete/{id}',[App\Http\Controllers\PemesananController::class,'pemesanan_delete']);
Route::get('pemesanan_edit/{id}',[App\Http\Controllers\PemesananController::class,'pemesanan_edit']);
Route::post('pemesanan_update/{id}',[App\Http\Controllers\PemesananController::class,'pemesanan_update']);
Route::get('pemesanan_cetak',[App\Http\Controllers\PemesananController::class,'cetak']);

Route::post('pemesanan_cetak_tanggal',[App\Http\Controllers\PemesananController::class,'pemesanan_cetak_tanggal']);




Route::get('admin/pembayaran_trainer',[App\Http\Controllers\PembayaranTrainerController::class,'index']);
Route::post('tambah_pembayaran_trainer',[App\Http\Controllers\PembayaranTrainerController::class,'tambah_pembayaran_trainer']);
Route::get('edit_pembayaran_trainer/{id}',[App\Http\Controllers\PembayaranTrainerController::class,'edit_pembayaran_trainer']);
Route::post('pembayaran_trainer_update/{id}',[App\Http\Controllers\PembayaranTrainerController::class,'pembayaran_trainer_update']);
Route::get('pembayaran_trainer_delete/{id}',[App\Http\Controllers\PembayaranTrainerController::class,'pembayaran_trainer_delete']);
Route::post('pembayaran_trainer_cetak_tanggal',[App\Http\Controllers\PembayaranTrainerController::class,'pembayaran_trainer_cetak_tanggal']);



Route::get('admin/pembatalan',[App\Http\Controllers\PembatalanController::class,'index_admin']);
Route::get('pembatalan_delete/{id}',[App\Http\Controllers\PembatalanController::class,'pembatalan_delete']);
Route::get('pembatalan_edit/{id}',[App\Http\Controllers\PembatalanController::class,'pembatalan_edit']);
Route::post('pembatalan_update/{id}',[App\Http\Controllers\PembatalanController::class,'pembatalan_update']);
});
