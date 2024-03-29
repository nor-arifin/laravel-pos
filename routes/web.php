<?php

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

// Route::get('/', function () {
//     return view('pages.dashboard', ['type_menu' => 'dashboard']);
// });
// Route::get('/login', function () {
//     return view('pages.auth.login', );
// })->name('login');
// Route::get('/register', function () {
//     return view('pages.auth.register', );
// })->name('register');
// Route::get('/users', function () {
//     return view('pages.users.index', ['type_menu' => 'setting']);
// })->name('users');

// FORTIFY

Route::get('/', function () {
    return view('pages.auth.login');
});
// MIDDLEWARE SETELAH AUTH
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard', ['type_menu' => 'dashboard']);
    })->name('home');
});
