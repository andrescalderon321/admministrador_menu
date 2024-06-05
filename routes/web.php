<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admin_controller;
use App\Http\Controllers\Logincontroller;

// Route::get('/',Logincontroller::class);

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('administrador/register',[Admin_controller::class,'register'])->name('register');
Route::get('administrador/inicio',[Admin_controller::class,'index']);
Route::get('administrador/empleados',[Admin_controller::class,'employees']);
Route::get('administrador/menu_comidas',[Admin_controller::class,'food_menu']);
Route::get('administrador/inventorias',[Admin_controller::class,'inventories']);
Route::get('administrador/ventas',[Admin_controller::class,'sale']);
Route::get('administrador/subscriber',[Admin_controller::class,'subscriber']);
Route::get('administrador/pedidos',[Admin_controller::class,'orders']);
Route::get('administrador/provedores',[Admin_controller::class,'suppliers']);



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');