<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PenggarisDBController;
use App\Http\Controllers\KaryawanDBController;
use App\Http\Controllers\PageCounterDBController;
use App\Http\Controllers\NewkaryawanDBController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('bootstrap1', function () {
    return view('bootstrap1');
});

Route::get('pertemuan3', function () {
    return view('bootstrap1');
});

Route::get('pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('validasi1', function () {
    return view('validasi1');
});

Route::get('js1', function () {
    return view('js1');
});

Route::prefix('ets')->group(function () {
    Route::view('/', 'ets')->name('ets');
    Route::view('/resume', 'resume')->name('resume');
    Route::view('/projects', 'projects')->name('projects');
    Route::view('/contact', 'contact')->name('contact');
});


Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);


// route blog
Route::get('/blog',[BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);


//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);



//route penggarisDB
Route::get('/penggaris', [PenggarisDBController::class, 'index']);
Route::get('/penggaris/tambah', [PenggarisDBController::class, 'tambah']);
Route::post('/penggaris/store', [PenggarisDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/penggaris/edit/{id}',[PenggarisDBController::class, 'edit']);
Route::post('/penggaris/update',[PenggarisDBController::class, 'update']);
Route::get('/penggaris/hapus/{id}', [PenggarisDBController::class, 'hapus']);

Route::get('/penggaris/cari', [PenggarisDBController::class, 'cari']);


//route karyawanDB
Route::get('/karyawan', [karyawanDBController::class, 'index']);
Route::get('/karyawan/tambah', [karyawanDBController::class, 'tambah']);
Route::post('/karyawan/store', [karyawanDBController::class, 'store']);
Route::post('/karyawan/update',[karyawanDBController::class, 'update']);
Route::get('/karyawan/hapus/{id}', [karyawanDBController::class, 'hapus']);

Route::get('/karyawan/cari', [karyawanDBController::class, 'cari']);


//route pageCounterDB
Route::get('/pageCounter', [PageCounterDBController::class, 'index']);

//route eas
Route::get('/eas', [NewkaryawanDBController::class, 'index']);
Route::get('/eas/tambah', [newkaryawanDBController::class, 'tambah']);
Route::post('/eas/store', [newkaryawanDBController::class, 'store']);
Route::post('/eas/update',[newkaryawanDBController::class, 'update']);
Route::get('/eas/hapus/{NIP}', [newkaryawanDBController::class, 'hapus']);
Route::get('/eas/cari', [newkaryawanDBController::class, 'cari']);
