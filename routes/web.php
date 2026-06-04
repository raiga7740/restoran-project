<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/menu', function () {
    return view('menu.index');
})->name('menu.index');

Route::get('/menu/{id}', function ($id) {
    return view('menu.detail', compact('id'));
})->name('menu.detail');

Route::get('/reservasi', function () {
    return view('reservasi');
})->name('reservasi');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/menu', function () {
    return view('admin.menu.index');
})->name('admin.menu.index');

Route::get('/admin/menu/create', function () {
    return view('admin.menu.create');
})->name('admin.menu.create');

Route::get('/admin/reservasi', function () {
    return view('admin.reservasi.index');
})->name('admin.reservasi.index');