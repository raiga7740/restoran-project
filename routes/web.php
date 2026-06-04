<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;
use App\Models\Menu;
use App\Models\Gallery;

Route::get('/', function () {
    $menus = Menu::latest()->take(4)->get();
    $galleries = Gallery::latest()->take(6)->get();

    return view('home', compact('menus', 'galleries'));
})->name('home');

Route::get('/menu', function () {
    return view('menu.index');
})->name('menu.index');

Route::get('/menu/{id}', function ($id) {
    return view('menu.detail', compact('id'));
})->name('menu.detail');

Route::post('/reservasi', [ReservationController::class, 'store'])->name('reservasi.store');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('/galeri', GalleryController::class);

    Route::resource('/menu', MenuController::class);

    Route::get('/reservasi', [AdminReservationController::class, 'index'])->name('reservasi.index');
    Route::delete('/reservasi/{reservation}', [AdminReservationController::class, 'destroy'])->name('reservasi.destroy');
    Route::patch('/reservasi/{reservation}/status/{status}', [AdminReservationController::class, 'updateStatus'])->name('reservasi.status');
});