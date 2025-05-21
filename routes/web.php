<?php

use Illuminate\Support\Facades\Route;
//

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

