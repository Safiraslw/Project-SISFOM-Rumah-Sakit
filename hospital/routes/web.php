<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\TempatTidurController;
use App\Http\Controllers\DataRawatController;
use App\Http\Controllers\ObatPerlengkapanController;
use App\Http\Controllers\TindakanController;
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
    return view('home', ['title' => 'Home']);
})->name('home');

//data
Route::get('/data_pegawai', [AdminController::class, 'index']);
Route::get('/data_dokter', [AdminController::class, 'data_dokter']);
Route::get('/jadwal_praktek', [AdminController::class, 'jadwal_praktek']);
Route::get('/data_pasien', [AdminController::class, 'data_pasien']);
Route::get('/tempat_tidur', [AdminController::class, 'tempat_tidur']);
Route::get('/data_rawat', [AdminController::class, 'data_rawat']);
Route::get('/obat_perlengkapan', [AdminController::class, 'obat_perlengkapan']);
Route::get('/data_tindakan', [AdminController::class, 'data_tindakan']);

//autentikasi
Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

//CRUD dokter
Route::get('/tambah_dokter', [DokterController::class, 'tambah_dokter']);
Route::post('/store_dokter', [DokterController::class, 'store_dokter']);
Route::post('/hapus_dokter', [DokterController::class, 'hapus_dokter']);
Route::get('/edit_dokter/{id}', [DokterController::class, 'edit_dokter']);
Route::post('/update_dokter', [DokterController::class, 'update_dokter']);
Route::post('/cari_dokter', [DokterController::class, 'cari_dokter']);

//crud pegawai
Route::get('/tambah_pegawai', [PegawaiController::class, 'tambah_pegawai']);
Route::post('/store_pegawai', [PegawaiController::class, 'store_pegawai']);
Route::post('/hapus_pegawai', [PegawaiController::class, 'hapus_pegawai']);
Route::post('/cari_pegawai', [PegawaiController::class, 'cari_pegawai']);
Route::get('/edit_pegawai/{id}', [PegawaiController::class, 'edit_pegawai']);
Route::post('/update_pegawai', [PegawaiController::class, 'update_pegawai']);

//crud pasien
Route::get('/tambah_pasien', [PasienController::class, 'tambah_pasien']);
Route::post('/store_pasien', [PasienController::class, 'store_pasien']);
Route::post('/hapus_pasien', [PasienController::class, 'hapus_pasien']);
Route::get('/edit_pasien/{id}', [PasienController::class, 'edit_pasien']);
Route::post('/update_pasien', [PasienController::class, 'update_pasien']);

//crud jadwal praktek
Route::get('/tambah_jadwal', [JadwalController::class, 'tambah_jadwal']);
Route::post('/store_jadwal', [JadwalController::class, 'store_jadwal']);
Route::post('/hapus_jadwal', [JadwalController::class, 'hapus_jadwal']);
Route::get('/edit_jadwal/{id}', [JadwalController::class, 'edit_jadwal']);
Route::post('/update_jadwal', [JadwalController::class, 'update_jadwal']);
Route::post('/cari_jadwal', [JadwalController::class, 'cari_jadwal']);
Route::post('/cari_pasien', [PasienController::class, 'cari_pasien']);

//crud tempat tidur
Route::get('/tambah_tmptidur', [TempatTidurController::class, 'tambah_tmptidur']);
Route::post('/store_tmptidur', [TempatTidurController::class, 'store_tmptidur']);
Route::post('/hapus_tmptidur', [TempatTidurController::class, 'hapus_tmptidur']);
Route::get('/edit_tmptidur/{id}', [TempatTidurController::class, 'edit_tmptidur']);
Route::post('/update_tmptidur', [TempatTidurController::class, 'update_tmptidur']);
Route::post('/cari_tmptidur', [TempatTidurController::class, 'cari_tmptidur']);

//crud data rawat
Route::get('/tambah_datarawat', [DataRawatController::class, 'tambah_datarawat']);
Route::post('/store_datarawat', [DataRawatController::class, 'store_datarawat']);
Route::get('/edit_datarawat/{id}', [DataRawatController::class, 'edit_datarawat']);
Route::post('/hapus_datarawat', [DataRawatController::class, 'hapus_datarawat']);
Route::post('/update_datarawat', [DataRawatController::class, 'update_datarawat']);
Route::post('/cari_rawat', [DataRawatController::class, 'cari_rawat']);

//crud perlengkapan dan obat 
Route::get('/tambah_obat', [ObatPerlengkapanController::class, 'tambah_obat']);
Route::post('/store_obat', [ObatPerlengkapanController::class, 'store_obat']);
Route::post('/hapus_obat', [ObatPerlengkapanController::class, 'hapus_obat']);
Route::get('/edit_obat/{id}', [ObatPerlengkapanController::class, 'edit_obat']);
Route::post('/update_obat', [ObatPerlengkapanController::class, 'update_obat']);
Route::post('/cari_obat', [ObatPerlengkapanController::class, 'cari_obat']);

//crud tindakan 
Route::get('/tambah_tindakan', [TindakanController::class, 'tambah_tindakan']);
Route::post('/store_tindakan', [TindakanController::class, 'store_tindakan']);
Route::post('/hapus_tindakan', [TindakanController::class, 'hapus_tindakan']);
Route::get('/edit_tindakan/{id}', [TindakanController::class, 'edit_tindakan']);
Route::post('/update_tindakan', [TindakanController::class, 'update_tindakan']);
Route::post('/cari_tindakan', [TindakanController::class, 'cari_tindakan']);