<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\KetentuanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\TataController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\RegisterController;
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
    return view('layout/splash', [
        "title" => "Home"
    ]);
});
Route::get('/login', function () {
    return view('authen/login', [
        "title" => "Login"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::post('/home/store', [HomeController::class, 'store']);
Route::get('/daftar', [HomeController::class, 'crud'])->middleware('admin');

Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');

Route::get('/unitcrud', [UnitController::class, 'create'])->middleware('admin');
Route::post('/unitcrud/store', [UnitController::class, 'store']);
Route::post('/unitcrud/{id}/update', [UnitController::class, 'update']);
Route::get('/unitcrud/{id}/destroy', [UnitController::class, 'destroy']);

Route::get('/anggota', [AnggotaController::class, 'index'])->middleware('auth');
Route::get('/anggotacrud', [AnggotaController::class, 'crud'])->middleware('admin');
Route::get('/anggotacrud/create', [AnggotaController::class, 'create']);
Route::post('/anggotacrud/store', [AnggotaController::class, 'store']);
Route::post('/anggotacrud/{id}/update', [AnggotaController::class, 'update']);
Route::get('/anggotacrud/{id}/destroy', [AnggotaController::class, 'destroy']);

Route::get('/posisicrud', [PosisiController::class, 'index'])->middleware('admin');
Route::post('/posisicrud/store', [PosisiController::class, 'store']);
Route::post('/posisicrud/{id}/update', [PosisiController::class, 'update']);
Route::get('/posisicrud/{id}/destroy', [PosisiController::class, 'destroy']);

Route::get('/ketentuan', [KetentuanController::class, 'index'])->middleware('auth');
Route::get('/ketentuancrud', [KetentuanController::class, 'create'])->middleware('auth');
Route::post('/ketentuancrud/store', [KetentuanController::class, 'store']);
Route::post('/ketentuancrud/{id}/update', [KetentuanController::class, 'update']);
Route::get('/ketentuan/{id}/destroy', [KetentuanController::class, 'destroy']);

Route::get('/info', [InformationController::class, 'index'])->middleware('auth');
Route::get('/infocrud', [InformationController::class, 'create'])->middleware('admin');
Route::post('/infocrud/store', [InformationController::class, 'store']);
Route::post('/infocrud/{id}/update', [InformationController::class, 'update']);
Route::get('/infocrud/{id}/destroy', [InformationController::class, 'destroy']);

Route::get('/tatacrud',[TataController::class, 'create'])->middleware('admin');
Route::post('/tatacrud/store',[TataController::class, 'store']);
Route::post('/tatacrud/{id}/update',[TataController::class, 'update']);
Route::get('/tatacrud/{id}/destroy',[TataController::class, 'destroy']);

Route::get('/syarat',[SyaratController::class, 'index'])->middleware('auth');
Route::get('/syaratcrud',[SyaratController::class, 'crud'])->middleware('admin');
Route::post('/syaratcrud/store',[SyaratController::class, 'store']);
Route::post('/syaratcrud/{id}/update',[SyaratController::class, 'update']);
Route::get('/syaratcrud/{id}/destroy',[SyaratController::class, 'destroy']);


