<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardJobController;

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

Route::get('/', [JobController::class, 'index']);
Route::get('/loker', [JobController::class, 'index']);
Route::get('/loker/{job:slug}', [JobController::class, 'show']);

Route::get('pengguna/{user:username}', function (User $user) {
    return view('user', [
        "title" => "Info lowongan dari $user->name",
        "active" => "lainnya",
        "jobs" => $user->jobs,
        "user" => $user
    ]);
});

Route::get('artikel', function () {
    return view('artikel', [
        "title" => "Artikel",
        "active" => "artikel"
    ]);
});

Route::get('unggah_lowongan', function () {
    return view('unggah_job', [
        "title" => "Unggah Info Lowongan",
        "active" => "unggah"
    ]);
});

Route::get('register', function () {
    return view('register', [
        "title" => "Register",
        "active" => "lainnya"
    ]);
});

Route::get('lupa_sandi', function () {
    return view('lupa_sandi', [
        "title" => "Lupa Sandi",
        "active" => "lainnya"
    ]);
});

Route::get('cari', function () {
    return view('cari', [
        "title" => "Cari",
        "active" => "cari"
    ]);
});

Route::get('lainnya', function () {
    return view('lainnya', [
        "title" => "Lainnya",
        "active" => "lainnya"
    ]);
});

Route::get('saring', function () {
    return view('saring', [
        "title" => "Saring",
        "active" => "beranda"
    ]);
});

Route::get('/masuk_log', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/masuk_log', [LoginController::class, 'authenticate']);
Route::post('/keluar_log', [LoginController::class, 'logout']);

Route::get('/registrasi', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegisterController::class, 'store']);

Route::get('/dashboard/checkSlug', [DashboardJobController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/detail/{job:slug}', [DashboardJobController::class, 'show'])->middleware('auth');
Route::resource('/dashboard', DashboardJobController::class)->middleware('auth');
