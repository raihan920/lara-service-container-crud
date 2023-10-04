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
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', [UserController::class, 'showUsers'])->name('users.list');
Route::get('/user/{id}', [UserController::class, 'showUser'])->name('user.details');
Route::get('/users/delete/{id}', [UserController::class, 'deleteIndividualUser'])->name('user.delete');
Route::get('/users/create', [UserController::class, 'createUser'])->name('user.create');
Route::post('/users/store', [UserController::class, 'storeUser'])->name('user.store');
