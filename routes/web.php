<?php

use App\Events\SensorEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LansiaController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LansiaControllerP;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PetugasControllerP;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [LandingController::class, 'index']);
Route::get('/blog-list', [LandingController::class, 'blog'])->name('blog-list');
Route::get('/blog-list/{id}', [LandingController::class, 'detail'])->name('blog-list.detail');


Route::get('/app', function () {
    return view('layouts.app');
});




Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');




//Route di node MCU
Route::get('/simpan/{nilaiTinggi}/{nilaiBerat}', [SensorController::class, 'simpan']);






Route::middleware(['auth'])->group(function () {
    Route::get('desa', [DesaController::class, 'index'])->name('desa')->middleware('cekAuth:admin');
    Route::get('desa/create', [DesaController::class, 'create'])->name('desa.create')->middleware('cekAuth:admin');
    Route::get('desa/map', [DesaController::class, 'map'])->name('desa.map')->middleware('cekAuth:admin');
    Route::get('desa/edit/{id}', [DesaController::class, 'edit'])->name('desa.edit')->middleware('cekAuth:admin');
    Route::get('desa/{id}', [DesaController::class, 'detail'])->name('desa.detail')->middleware('cekAuth:admin');
    Route::post('desa/save', [DesaController::class, 'save'])->name('desa.save')->middleware('cekAuth:admin');
    Route::get('desa/delete/{id}', [DesaController::class, 'delete'])->name('desa.delete')->middleware('cekAuth:admin');


    Route::get('petugas', [PetugasController::class, 'index'])->name('petugas')->middleware('cekAuth:admin');
    Route::get('petugas/create', [PetugasController::class, 'create'])->name('petugas.create')->middleware('cekAuth:admin');
    Route::get('petugas/edit/{id}', [PetugasController::class, 'edit'])->name('petugas.edit')->middleware('cekAuth:admin');
    Route::get('petugas/{id}', [PetugasController::class, 'detail'])->name('petugas.detail')->middleware('cekAuth:admin');
    Route::post('petugas/save', [PetugasController::class, 'save'])->name('petugas.save')->middleware('cekAuth:admin');
    Route::get('petugas/delete/{id}', [PetugasController::class, 'delete'])->name('petugas.delete')->middleware('cekAuth:admin');

    Route::get('admin', [AdminController::class, 'index'])->name('admin')->middleware('cekAuth:admin');
    Route::get('admin/create', [AdminController::class, 'create'])->name('admin.create')->middleware('cekAuth:admin');
    Route::get('admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit')->middleware('cekAuth:admin');
    Route::get('admin/{id}', [AdminController::class, 'detail'])->name('admin.detail')->middleware('cekAuth:admin');
    Route::post('admin/save', [AdminController::class, 'save'])->name('admin.save')->middleware('cekAuth:admin');
    Route::get('admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete')->middleware('cekAuth:admin');




    Route::get('blog', [BlogController::class, 'index'])->name('blog')->middleware('cekAuth:admin');
    Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('cekAuth:admin');
    Route::get('blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('cekAuth:admin');
    Route::get('blog/{id}', [BlogController::class, 'detail'])->name('blog.detail')->middleware('cekAuth:admin');
    Route::post('blog/save', [BlogController::class, 'save'])->name('blog.save')->middleware('cekAuth:admin');
    Route::get('blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete')->middleware('cekAuth:admin');


    Route::get('lansia', [LansiaController::class, 'index'])->name('lansia')->middleware('cekAuth:admin');
    Route::get('lansia/create', [LansiaController::class, 'create'])->name('lansia.create')->middleware('cekAuth:admin');
    Route::get('lansia/edit/{id}', [LansiaController::class, 'edit'])->name('lansia.edit')->middleware('cekAuth:admin');
    Route::post('lansia/save', [LansiaController::class, 'save'])->name('lansia.save')->middleware('cekAuth:admin');
    Route::get('lansia/delete/{id}', [LansiaController::class, 'delete'])->name('lansia.delete')->middleware('cekAuth:admin');
    Route::get('lansia/{id}', [LansiaController::class, 'detail'])->name('lansia.detail')->middleware('cekAuth:admin');


    Route::get('lansia/edit/gangguan/{id}', [LansiaController::class, 'edit_ganngguan'])->name('lansia.edit.ganngguan')->middleware('cekAuth:admin');
    Route::post('lansia/gangguan/save', [LansiaController::class, 'save_gangguan'])->name('lansia.save.g')->middleware('cekAuth:admin');
    Route::get('lansia/gangguan/delete/{id}', [LansiaController::class, 'delete_gangguan'])->name('lansia.delete.g')->middleware('cekAuth:admin');
    Route::get('lansia/gangguan/{id}', [LansiaController::class, 'detail_gangguan'])->name('lansia.detail.g')->middleware('cekAuth:admin');



    // Route::get('lansia/create/fisik', [LansiaController::class, 'create_fisik'])->name('lansia.create.fisik')->middleware('cekAuth:admin');
    Route::post('lansia/fisik/save', [LansiaController::class, 'save_fisik'])->name('lansia.save.f')->middleware('cekAuth:admin');
    Route::get('lansia/fisik/delete/{id}', [LansiaController::class, 'delete_fisik'])->name('lansia.delete.f')->middleware('cekAuth:admin');
    Route::get('lansia/fisik/{id}', [LansiaController::class, 'detail_fisik'])->name('lansia.detail.f')->middleware('cekAuth:admin');


    Route::post('lansia/lab/save', [LansiaController::class, 'save_lab'])->name('lansia.save.lab')->middleware('cekAuth:admin');
    Route::get('lansia/lab/delete/{id}', [LansiaController::class, 'delete_lab'])->name('lansia.delete.lab')->middleware('cekAuth:admin');
    Route::get('lansia/lab/{id}', [LansiaController::class, 'detail_lab'])->name('lansia.detail.lab')->middleware('cekAuth:admin');

    Route::post('lansia/p3g/save', [LansiaController::class, 'save_p3g'])->name('lansia.save.p3g')->middleware('cekAuth:admin');
    Route::get('lansia/p3g/delete/{id}', [LansiaController::class, 'delete_p3g'])->name('lansia.delete.p3g')->middleware('cekAuth:admin');
    Route::get('lansia/p3g/{id}', [LansiaController::class, 'detail_p3g'])->name('lansia.detail.p3g')->middleware('cekAuth:admin');

    Route::get('Admin/detail', [AdminController::class, 'me'])->name('admin.details')->middleware('cekAuth:admin');

});

Route::middleware(['auth'])->group(function () {
    Route::get('Lansia', [LansiaControllerP::class, 'index'])->name('lansia.petugas')->middleware('cekAuth:petugas');
    Route::get('Lansia/create', [LansiaControllerP::class, 'create'])->name('lansia.petugas.create')->middleware('cekAuth:petugas');
    Route::get('Lansia/edit/{id}', [LansiaControllerP::class, 'edit'])->name('lansia.petugas.edit')->middleware('cekAuth:petugas');
    Route::post('Lansia/save', [LansiaControllerP::class, 'save'])->name('lansia.petugas.savev')->middleware('cekAuth:petugas');
    Route::get('Lansia/delete/{id}', [LansiaControllerP::class, 'delete'])->name('lansia.petugas.delete')->middleware('cekAuth:petugas');
    Route::get('Lansia/{id}', [LansiaControllerP::class, 'detail'])->name('lansia.petugas.detail')->middleware('cekAuth:petugas');


    Route::get('Lansia/edit/gangguan/{id}', [LansiaControllerP::class, 'edit_ganngguan'])->name('lansia.petugas.edit.ganngguan')->middleware('cekAuth:petugas');
    Route::post('Lansia/gangguan/save', [LansiaControllerP::class, 'save_gangguan'])->name('lansia.petugas.save.g')->middleware('cekAuth:petugas');
    Route::get('Lansia/gangguan/delete/{id}', [LansiaControllerP::class, 'delete_gangguan'])->name('lansia.petugas.delete.g')->middleware('cekAuth:petugas');
    Route::get('Lansia/gangguan/{id}', [LansiaControllerP::class, 'detail_gangguan'])->name('lansia.petugas.detail.g')->middleware('cekAuth:petugas');



    // Route::get('lansia/create/fisik', [LansiaControllerP::class, 'create_fisik'])->name('lansia.create.fisik')->middleware('cekAuth:petugas');
    Route::post('Lansia/fisik/save', [LansiaControllerP::class, 'save_fisik'])->name('lansia.petugas.save.f')->middleware('cekAuth:petugas');
    Route::get('Lansia/fisik/delete/{id}', [LansiaControllerP::class, 'delete_fisik'])->name('lansia.petugas.delete.f')->middleware('cekAuth:petugas');
    Route::get('Lansia/fisik/{id}', [LansiaControllerP::class, 'detail_fisik'])->name('lansia.petugas.detail.f')->middleware('cekAuth:petugas');

    // Route::get('lansia/fisik/delete/{id}', [LansiaController::class, 'delete_fisik'])->name('lansia.delete.f')->middleware('cekAuth:admin');

    Route::post('Lansia/lab/save', [LansiaControllerP::class, 'save_lab'])->name('lansia.petugas.save.lab')->middleware('cekAuth:petugas');
    Route::get('Lansia/lab/delete/{id}', [LansiaControllerP::class, 'delete_lab'])->name('lansia.petugas.delete.lab')->middleware('cekAuth:petugas');
    Route::get('Lansia/lab/{id}', [LansiaControllerP::class, 'detail_lab'])->name('lansia.petugas.detail.lab')->middleware('cekAuth:petugas');

    Route::post('Lansia/p3g/save', [LansiaControllerP::class, 'save_p3g'])->name('lansia.petugas.save.p3g')->middleware('cekAuth:petugas');
    Route::get('Lansia/p3g/delete/{id}', [LansiaControllerP::class, 'delete_p3g'])->name('lansia.petugas.delete.p3g')->middleware('cekAuth:petugas');
    Route::get('Lansia/p3g/{id}', [LansiaControllerP::class, 'detail_p3g'])->name('lansia.petugas.detail.p3g')->middleware('cekAuth:petugas');


    Route::get('Petugas/detail', [PetugasControllerP::class, 'detail'])->name('petugas.details')->middleware('cekAuth:petugas');


});



