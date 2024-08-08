<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\VendorInvoice;
use App\Http\Controllers\GstBillController;





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

Route::get('/welcome', function () {
 return view('welcome');
});
Route::get('/', [AppController::class, 'app']);


// Party routes
Route::get('/manage-party', [PartyController::class, 'index'])->name('party.index');
Route::get('/add-party', [PartyController::class, 'add'])->name('party.add');
Route::post('/create-party', [PartyController::class, 'create'])->name('party.create');
Route::get('/edit-party/{id}', [PartyController::class, 'edit'])->name('party.edit');
Route::post('/update-party', [PartyController::class, 'update'])->name('party.update');
Route::get('/delete-party/{id}', [PartyController::class, 'delete'])->name('party.delete');






//gst
Route::get('/manage-gst-bills', [GstBillController::class, 'index'])->name('gst.index');
Route::get('/add-gst-bill', [GstBillController::class, 'add'])->name('gst.add');
Route::post('/create-party', [GstBillController::class, 'create'])->name('gst.create');
Route::get('/print-gst-bill', [GstBillController::class, 'print'])->name('gst.print');


//invoice
Route::get('/invoice', [VendorInvoice::class, 'index'])->name('invoice.index');


