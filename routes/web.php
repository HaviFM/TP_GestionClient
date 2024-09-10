<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Permettre l'accès à la création et à l'enregistrement de clients sans authentification
Route::get('clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('clients', [ClientController::class, 'store'])->name('clients.store');

// Les autres routes CRUD nécessitent l'authentification
Route::middleware('auth')->group(function () {
    Route::resource('clients', ClientController::class)->except(['create', 'store']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
