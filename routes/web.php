<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkersController;
use App\Http\Controllers\DivisionsController;
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

Route::get('divisions', [DivisionsController::class, 'index'])->name('divisions.index');
Route::get('divisions/create', [DivisionsController::class, 'create'])->name('divisions.create');
Route::post('divisions', [DivisionsController::class, 'store'])->name('divisions.store');
Route::get('divisions/{id}/edit', [DivisionsController::class, 'edit'])->name('divisions.edit');
Route::put('divisions/{id}', [DivisionsController::class, 'update'])->name('divisions.update');
Route::post('divisions/{id}', [DivisionsController::class, 'destroy'])->name('divisions.destroy');

//リソース指定
Route::resources([
    'workers' => WorkersController::class,
], ['except' => 'show']);

require __DIR__.'/auth.php';
