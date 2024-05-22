<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::midlleware('auth')->group(function () {
    Route::get('/home', HomeController::class, 'index')->name('home');
    Route::resource([
        'roles' => RoleController::class,
        'users' => UserController::class,
        'mahasiswa' => MahasiswaController::class,
    ]);
});
