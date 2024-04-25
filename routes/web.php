<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DathangController;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('pages.login');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/loginadmin',function(){
    return view('pages.adminlogin');
});

Route::get('/homeadmin', function () {
    return view('admin.indexadmin');
});

Route::get('/blog',function(){
    return view('pages.blog');
});

Route::get('/dathang',function(){
    return view('pages.dathang');
});


// -------------------BACKEND-------------------------

// -------------USER-----------------
Route::post('/home', [Usercontroller::class, 'home'])->name('home');
Route::get('/log_out', [Usercontroller::class, 'pages.login'])->name('pages.login');
Route::get('/hoadon',function(){
    return view('pages.hoadon');
});

// --------------ADMIN-------------------
Route::post('/homeadmin', [AdminController::class,'homeadmin'])->name('homeadmin');
Route::get('/qlvchuyen',function(){
    return view('admin.qlvanchuyen');
});



//--------------DATHANG-----------------
Route::post('/dathang', [DathangController::class,'dathang'])->name('dathang');