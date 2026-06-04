<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;
use App\Models\Menu;
use App\Models\Gallery;
use App\Models\Reservation;

Route::get('/', function () {
    $menus = Menu::latest()->take(3)->get();
    $galleries = Gallery::latest()->take(6)->get();

    return view('home', compact('menus', 'galleries'));
})->name('home');

Route::get('/menu', function () {
    $menus = Menu::latest()->get();

    return view('menu.index', compact('menus'));
})->name('menu.index');

Route::get('/menu/{menu}', function (Menu $menu) {
    return view('menu.detail', compact('menu'));
})->name('menu.detail');

Route::post('/reservasi', [ReservationController::class, 'store'])->name('reservasi.store');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
    $totalMenu = Menu::count();
    $totalReservasi = Reservation::count();
    $totalGaleri = Gallery::count();

    return view('admin.dashboard', compact(
        'totalMenu',
        'totalReservasi',
        'totalGaleri'
    ));
    })->name('dashboard');
    Route::resource('/galeri', GalleryController::class);

    Route::resource('/menu', MenuController::class);

    Route::get('/reservasi', [AdminReservationController::class, 'index'])->name('reservasi.index');
    Route::delete('/reservasi/{reservation}', [AdminReservationController::class, 'destroy'])->name('reservasi.destroy');
    Route::patch('/reservasi/{reservation}/status/{status}', [AdminReservationController::class, 'updateStatus'])->name('reservasi.status');
});