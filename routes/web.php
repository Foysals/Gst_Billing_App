<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PartyController;



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

Route::get('/', function () {
 return view('welcome');
});
Route::get('/dashboard', [AppController::class, 'app']);


// Party routes
Route::get('/party', [PartyController::class, 'index'])->name('party.index');
Route::get('/party-add', [PartyController::class, 'add'])->name('party.add');

