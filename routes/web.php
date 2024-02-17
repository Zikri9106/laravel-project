<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardKelasController;
use App\Http\Controllers\DashboardStudentsController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'nama' => 'Muhammad Zikrinayah',
        'kelas' => '11 PPLG 1',
        'foto' => 'profile.png',
    ]);
});

Route::get('/extracurricular', [ExtracurricularController::class, 'dataEkskul']);

Route::group(["prefix" => "/student"], function () {
    Route::get('/all', [StudentsController::class, 'all']);
    Route::get('/detail/{student}', [StudentsController::class, 'show']);
    Route::get('/create', [StudentsController::class, 'create']);
    Route::post('/add', [StudentsController::class, 'store']);
    Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);
    Route::post('/update/{student}', [StudentsController::class, 'update']);
    Route::get('/edit/{student}', [StudentsController::class, 'edit']);
});

Route::group(["prefix" => "/kelas"], function () {
    Route::get('/all', [KelasController::class, 'all']);
    Route::get('/detail/{kelas}', [KelasController::class, 'show']);
    Route::get('/create', [KelasController::class, 'create']);
    Route::post('/add', [KelasController::class, 'store']);
    Route::delete('/delete/{kelas}', [KelasController::class, 'destroy']);
    Route::post('/update/{kelas}', [KelasController::class, 'update']);
    Route::get('/edit/{kelas}', [KelasController::class, 'edit']);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::group(["prefix" => "/dashboard"], function () {
    Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
    Route::get('/extracurricular', [ExtracurricularController::class, 'dataEkskulDashboard'])->middleware('auth');

    Route::group(["prefix" => "/student"], function () {
        Route::get('/all', [DashboardStudentsController::class, 'all'])->middleware('auth');
        Route::get('/detail/{student}', [DashboardStudentsController::class, 'show'])->middleware('auth');
        Route::get('/create', [DashboardStudentsController::class, 'create'])->middleware('auth');
        Route::post('/add', [DashboardStudentsController::class, 'store'])->middleware('auth');
        Route::delete('/delete/{student}', [DashboardStudentsController::class, 'destroy'])->middleware('auth');
        Route::post('/update/{student}', [DashboardStudentsController::class, 'update'])->middleware('auth');
        Route::get('/edit/{student}', [DashboardStudentsController::class, 'edit'])->middleware('auth');
    });

    Route::group(["prefix" => "/kelas"], function () {
        Route::get('/all', [DashboardKelasController::class, 'all'])->middleware('auth');
        Route::get('/detail/{kelas}', [DashboardKelasController::class, 'show'])->middleware('auth');
        Route::get('/create', [DashboardKelasController::class, 'create'])->middleware('auth');
        Route::post('/add', [DashboardKelasController::class, 'store'])->middleware('auth');
        Route::delete('/delete/{kelas}', [DashboardKelasController::class, 'destroy'])->middleware('auth');
        Route::post('/update/{kelas}', [DashboardKelasController::class, 'update'])->middleware('auth');
        Route::get('/edit/{kelas}', [DashboardKelasController::class, 'edit'])->middleware('auth');
    });
});
