<?php

use App\Http\Controllers\librarController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\booksController;



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

Route::get('/', [librarController::class, 'index'])->middleware('auth');
route::get('/input', [librarController::class, 'inputView']);
route::post('/input', [librarController::class, 'store']);
route::get('/edit', [librarController::class, 'editView']);
route::get('/edit/{id}', [librarController::class, 'editform']);
route::put('/edit/{id}', [librarController::class, 'update']);
route::delete('/delete/{id}', [librarController::class, 'destroy']);
route::get('detail/{id}', [librarController::class, 'detail']);
route::get('/login', [librarController::class, 'loginView'])->name('login')->middleware('guest');
route::post('/login', [UserController::class, 'authenticate']);
route::post('/logout', [UserController::class, 'logout']);

//to register
route::get('/register', [UserController::class, 'index']);
route::post('/register', [UserController::class, 'store']);
route::get('register/password', [UserController::class, 'passwordView']);




