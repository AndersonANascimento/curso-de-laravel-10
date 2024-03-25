<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Contracts\Auth\SupportsBasicAuth;
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
Route::prefix('supports')->group(function () {
    Route::delete('/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
    Route::put('/{id}', [SupportController::class, 'update'])->name('supports.update');
    Route::get('/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
    Route::get('/create', [SupportController::class, 'create'])->name('supports.create');
    Route::get('/{id}', [SupportController::class, 'show'])->name('supports.show');
    Route::post('/', [SupportController::class, 'store'])->name('supports.store');
    Route::get('/', [SupportController::class, 'index'])->name('supports.index');
});

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
