<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ruang1Controller;
use App\Http\Controllers\Ruang2Controller;
use App\Http\Controllers\Ruang3Controller;
use App\Http\Controllers\Ruang4Controller;
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [Ruang1Controller::class, 'index'])->name('main');
Route::get('/Ruang1/asset', [Ruang1Controller::class, 'assets'])->name('Ruang1.asset');
Route::get('/Ruang1/create', [Ruang1Controller::class, 'create']);
Route::get('/Ruang1/edit', [Ruang1Controller::class, 'edit']);
Route::get('/Ruang1/data', [Ruang1Controller::class, 'getData'])->name('assets.data');
Route::get('/Ruang1/edit/{id}', [Ruang1Controller::class, 'edit'])->name('assets.edit');
Route::put('/Ruang1/edit/{id}', [Ruang1Controller::class, 'update'])->name('assets.update');
Route::post('/Ruang1/store', [Ruang1Controller::class, 'store']);
Route::delete('/Ruang1/delete/{id}', [Ruang1Controller::class, 'destroy'])->name('assets.delete');

Route::get('/Ruang2', [Ruang2Controller::class, 'index']);
Route::get('/Ruang2/asset', [Ruang2Controller::class, 'assets'])->name('Ruang2.asset'); 
Route::get('/Ruang2/create', [Ruang2Controller::class, 'create']);
Route::get('/Ruang2/edit', [Ruang2Controller::class, 'edit']);
Route::get('/Ruang2/data', [Ruang2Controller::class, 'getData'])->name('assets.data2');
Route::get('/Ruang2/edit/{id}', [Ruang2Controller::class, 'edit'])->name('assets.edit2');
Route::put('/Ruang2/edit/{id}', [Ruang2Controller::class, 'update'])->name('assets.update');
Route::post('/Ruang2/store', [Ruang2Controller::class, 'store']);
Route::delete('/Ruang2/delete/{id}', [Ruang2Controller::class, 'destroy'])->name('assets.delete');

Route::get('/Ruang3', [Ruang3Controller::class, 'index']); 
Route::get('/Ruang3/asset', [Ruang3Controller::class, 'assets'])->name('Ruang3.asset');
Route::get('/Ruang3/create', [Ruang3Controller::class, 'create']);
Route::get('/Ruang3/edit', [Ruang3Controller::class, 'edit']);
Route::get('/Ruang3/data', [Ruang3Controller::class, 'getData'])->name('assets.data3');
Route::get('/Ruang3/edit/{id}', [Ruang3Controller::class, 'edit'])->name('assets.edit3');
Route::put('/Ruang3/edit/{id}', [Ruang3Controller::class, 'update'])->name('assets.update');
Route::post('/Ruang3/store', [Ruang3Controller::class, 'store']);
Route::delete('/Ruang3/delete/{id}', [Ruang3Controller::class, 'destroy'])->name('assets.delete');

Route::get('/Ruang4', [Ruang4Controller::class, 'index']);
Route::get('/Ruang4/asset', [Ruang4Controller::class, 'assets'])->name('Ruang4.asset');
Route::get('/Ruang4/create', [Ruang4Controller::class, 'create']);
Route::get('/Ruang4/edit', [Ruang4Controller::class, 'edit']);
Route::get('/Ruang4/data', [Ruang4Controller::class, 'getData'])->name('assets.data4');
Route::get('/Ruang4/edit/{id}', [Ruang4Controller::class, 'edit'])->name('assets.edit4');
Route::put('/Ruang4/edit/{id}', [Ruang4Controller::class, 'update'])->name('assets.update');
Route::post('/Ruang4/store', [Ruang4Controller::class, 'store']);
Route::delete('/Ruang4/delete/{id}', [Ruang4Controller::class, 'destroy'])->name('assets.delete');