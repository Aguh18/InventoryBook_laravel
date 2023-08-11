<?php

use App\Http\Controllers\librarController;
use Illuminate\Routing\Controller;
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

Route::get('/', [librarController::class, 'index']);
route::get('/input', [librarController::class, 'inputView']);
route::post('/input', [librarController::class, 'store']);
route::get('/edit', [librarController::class, 'editView']);
route::get('/edit/{id}', [librarController::class, 'editform']);
route::put('/edit/{id}', [librarController::class, 'update']);
route::delete('/delete/{id}', [librarController::class, 'destroy']);
route::get('detail/{id}', [librarController::class, 'detail']);
