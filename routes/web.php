<?php

use App\Events\SensorEvent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LansiaController;
use App\Http\Controllers\SensorController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
Route::get('/app', function () {
    return view('layouts.app');
});


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');



Route::get('petugas', [PetugasController::class, 'index'])->name('petugas')->middleware('auth');
Route::get('petugas/create', [PetugasController::class, 'create'])->name('petugas.create')->middleware('auth');
Route::get('petugas/edit/{id}', [PetugasController::class, 'edit'])->name('petugas.edit')->middleware('auth');
Route::get('petugas/{id}', [PetugasController::class, 'detail'])->name('petugas.detail')->middleware('auth');
Route::post('petugas/save', [PetugasController::class, 'save'])->name('petugas.save')->middleware('auth');
Route::get('petugas/delete/{id}', [PetugasController::class, 'delete'])->name('petugas.delete')->middleware('auth');



// Route::get('/edit/{id}', [TeacherClassController::class, 'edit'])->name('teacher.class.edit');

//
Route::get('admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('admin/create', [AdminController::class, 'create'])->name('admin.create')->middleware('auth');
Route::get('admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit')->middleware('auth');
Route::get('admin/{id}', [AdminController::class, 'detail'])->name('admin.detail')->middleware('auth');
Route::post('admin/save', [AdminController::class, 'save'])->name('admin.save')->middleware('auth');
Route::get('admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete')->middleware('auth');




Route::get('blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::get('blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::get('blog/{id}', [BlogController::class, 'detail'])->name('blog.detail')->middleware('auth');
Route::post('blog/save', [BlogController::class, 'save'])->name('blog.save')->middleware('auth');
Route::get('blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete')->middleware('auth');



Route::get('lansia', [LansiaController::class, 'index'])->name('lansia')->middleware('auth');
Route::get('lansia/create', [LansiaController::class, 'create'])->name('lansia.create')->middleware('auth');
Route::get('lansia/edit/{id}', [LansiaController::class, 'edit'])->name('lansia.edit')->middleware('auth');
Route::post('lansia/save', [LansiaController::class, 'save'])->name('lansia.save')->middleware('auth');
Route::get('lansia/delete/{id}', [LansiaController::class, 'delete'])->name('lansia.delete')->middleware('auth');
Route::get('lansia/{id}', [LansiaController::class, 'detail'])->name('lansia.detail')->middleware('auth');
// Route::get('lansia/{id}', [LansiaController::class, 'detail'])->name('lansia.overview')->middleware('auth');
// Route::get('lansia/create/gangguan', [LansiaController::class, 'create_ganngguan'])->name('lansia.create.ganngguan')->middleware('auth');
// Route::get('lansia/create/gangguan', [LansiaController::class, 'create_ganngguan'])->name('lansia.create.ganngguan')->middleware('auth');
Route::get('lansia/edit/gangguan/{id}', [LansiaController::class, 'edit_ganngguan'])->name('lansia.edit.ganngguan')->middleware('auth');
Route::post('lansia/gangguan/save', [LansiaController::class, 'save_gangguan'])->name('lansia.save.g')->middleware('auth');
Route::get('lansia/delete/gangguan/{id}', [LansiaController::class, 'delete_gangguan'])->name('lansia.delete.g')->middleware('auth');


// Route::get('lansia/create/fisik', [LansiaController::class, 'create_fisik'])->name('lansia.create.fisik')->middleware('auth');
Route::post('lansia/fisik/save', [LansiaController::class, 'save_fisik'])->name('lansia.save.f')->middleware('auth');
Route::get('lansia/delete/fisik/{id}', [LansiaController::class, 'delete_fisik'])->name('lansia.delete.f')->middleware('auth');

Route::post('lansia/lab/save', [LansiaController::class, 'save_lab'])->name('lansia.save.lab')->middleware('auth');
Route::get('lansia/delete/lab/{id}', [LansiaController::class, 'delete_lab'])->name('lansia.delete.lab')->middleware('auth');


Route::post('lansia/p3g/save', [LansiaController::class, 'save_p3g'])->name('lansia.save.p3g')->middleware('auth');
Route::get('lansia/delete/p3g/{id}', [LansiaController::class, 'delete_p3g'])->name('lansia.delete.p3g')->middleware('auth');






Route::get('desa', [DesaController::class, 'index'])->name('desa')->middleware('auth');
Route::get('desa/create', [DesaController::class, 'create'])->name('desa.create')->middleware('auth');
Route::get('desa/map', [DesaController::class, 'map'])->name('desa.map')->middleware('auth');
Route::get('desa/edit/{id}', [DesaController::class, 'edit'])->name('desa.edit')->middleware('auth');
Route::get('desa/{id}', [DesaController::class, 'detail'])->name('desa.detail')->middleware('auth');
Route::post('desa/save', [DesaController::class, 'save'])->name('desa.save')->middleware('auth');
Route::get('desa/delete/{id}', [DesaController::class, 'delete'])->name('desa.delete')->middleware('auth');




//Route di node MCU
Route::get('/simpan/{nilaiTinggi}/{nilaiBerat}', [SensorController::class, 'simpan'])->middleware('auth');



// Route::get('admin/teachers/create', [TeacherController::class, 'add'])->name('teachers.create');
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


