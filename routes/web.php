<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

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

Route::get('/',[MahasiswaController::class, 'welcome']);

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard', [
            "judul"=>"SI-Mahasiswa||Dashboard"
        ]);
    })->name('dashboard');

    Route::controller(MahasiswaController::class)->prefix('mahasiswa')->group(function () { 
        Route::get('', 'index')->name('mahasiswa');
        Route::get('create', 'create')->name('mahasiswas.create');
        Route::post('store', 'store')->name('mahasiswas.store');
        Route::get('show/{id}', 'show')->name('mahasiswas.show');
        Route::get('edit/{id}', 'edit')->name('mahasiswas.edit');
        Route::put('edit/{id}', 'update')->name('mahasiswas.update');
        Route::delete('destroy/{id}', 'destroy')->name('mahasiswas.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});