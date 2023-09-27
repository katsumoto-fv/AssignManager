<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkersController;
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

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/workers', [WorkersController::class, 'index'])->name('workers.index');
Route::get('/workers/create', [WorkersController::class, 'create'])->name('workers.create');
Route::get('/workers/{id}/edit', [WorkersController::class, 'edit'])->name('workers.edit');

require __DIR__.'/auth.php';
