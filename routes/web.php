<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/register', [RegisterController::class, 'register'])->name('auth.register');

Route::get('/', function () {
return view('home');
});