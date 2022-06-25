<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrintController;
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

Route::get('/', function () {
    return view('front.welcome');
})->name('awal');
Route::get('/profil', function () {
    return view('front.profil');
})->name('profil');

Route::get('/lupa-password', function () {
    return view('front.lupa-password');
})->name('lupa-password');

Route::get('/pendaftar',[FrontController::class, 'pendaftar'])->name('pendaftar');
Route::get('/pengumuman',[FrontController::class, 'pengumuman'])->name('pengumuman');
Route::get('/informasi',[FrontController::class, 'informasi'])->name('informasi');
Route::post('/lupa-password',[FrontController::class, 'forgetPassword'])->name('forget-password');
Auth::routes();
Route::get('register/siswa', [RegisterController::class, 'registerSiswa'])->name('register-siswa');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/formulir',[UserController::class, 'formulir'])->name('user.formulir');
Route::post('/formulir/{id}',[UserController::class, 'formulirPost'])->name('user.formulir.post');
Route::get('/formulir/{id}',[UserController::class, 'formulirUpdate'])->name('user.formulir.update');
Route::put('/formulir/{id}',[UserController::class, 'formulirPut'])->name('user.formulir.put');
Route::get('/cetak/pendaftaran',[PrintController::class, 'pendaftaran'])->name('cetak.pendaftaran');
Route::get('/pengumuman-after',[UserController::class, 'pengumuman'])->name('user.pengumuman-after');
Route::get('/change-password', function () {
    return view('user.change_password');
})->name('change-password');
Route::post('/change-password',[UserController::class, 'updatePassword'])->name('change-password.post');

Route::get('/berkas',[UserController::class, 'berkas'])->name('user.berkas');
Route::post('/berkas',[UserController::class, 'berkasPost'])->name('user.berkas.post');
Route::get('/berkas/{id}',[UserController::class, 'berkasUpdate'])->name('user.berkas.update');
Route::post('/berkas/{id}',[UserController::class, 'berkasPut'])->name('user.berkas.put');
Route::get('/cetak-pengumuman/{id}',[PrintController::class, 'cetakHasilPengumuman'])->name('user.cetakpengumuman');
Route::get('/cetak-tolak/{id}',[PrintController::class, 'cetakTolak'])->name('user.tolak');
Route::get('/cetak-selesai/{id}',[PrintController::class, 'cetakSelesaiMagang'])->name('user.cetakSelesaiMagang');



Route::get('/validasi',[UserController::class, 'validasi'])->name('user.validasi');
Route::get('/user-absensi',[UserController::class, 'absensi'])->name('user.absensi');
Route::get('/user-absensi/{status}',[UserController::class, 'absensiStatus'])->name('user.absensi.status');
Route::get('/hasil-magang',[UserController::class, 'hasilMagang'])->name('user.hasilmagang');
Route::get('/hasil-magang/cetak/{id}',[PrintController::class, 'cetakHasilMagang'])->name('user.cetakhasilmagang');

Route::get('/admin_dashboard',[AdminController::class, 'index'])->name('admin');
Route::get('/daftar_pelamar',[AdminController::class, 'pelamar'])->name('admin.pelamar');
Route::get('/daftar_pelamar_tolak',[AdminController::class, 'tolak'])->name('admin.tolak');
Route::get('/daftar_pelamar_konfirmasi',[AdminController::class, 'konfirmasi'])->name('admin.konfirmasi');
Route::get('/daftar_pelamar_konfirmasi/{id}',[AdminController::class, 'konfirmasiStatus'])->name('admin.konfirmasi_status');
Route::get('/daftar_pelamar/{id}',[AdminController::class, 'detailPelamar'])->name('admin.detail_pelamar');
Route::get('/change_status/{id}/{status}',[AdminController::class, 'changeStatusPelamar'])->name('admin.change.pelamar');
Route::get('/daftar_penilaian',[AdminController::class, 'penilaian'])->name('admin.penilaian');
Route::get('/daftar_penilaian/{id}',[AdminController::class, 'penilaianDetail'])->name('admin.detailpenilaian');
Route::post('/daftar_penilaian/{id}',[AdminController::class, 'penilaianPost'])->name('admin.penilaian.post');
Route::get('/absensi',[AdminController::class, 'absensi'])->name('admin.absensi');
Route::get('/absensi-detail/{id}',[AdminController::class, 'absensiDetail'])->name('admin.absensi.detail');
// 
Route::get('/delete-peserta/{id}',[AdminController::class, 'deletePeserta'])->name('admin.delete-perserta');
Route::get('/admin/rekap-perbulan',[AdminController::class, 'rekapPerbulan'])->name('admin.rekap-perbulan');
Route::get('/cetak/rekap-perbulan/{tanggal_awal}/{tanggal_akhir}',[AdminController::class, 'cetakRekapPerbulan'])->name('cetak-rekap');


Route::get('/admin/edit-peserta/{id}',[AdminController::class, 'editPeserta'])->name('admin.edit-perserta');

Route::get('/alasan-tolak/{id}',[AdminController::class, 'AlasanTolak'])->name('admin.alasan_tolak');
Route::post('/alasan-tolak',[AdminController::class, 'AlasanTolakPost'])->name('admin.alasan_tolak_post');