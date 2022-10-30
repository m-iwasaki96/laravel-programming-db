<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', [TopController::class, 'index'])->name('top');
Route::get('/items', [ItemController::class, 'index'])->name('items.index');

Route::get('/html_css', [TopController::class, 'html_css'])->name('html_css');

Route::resource('items', ItemController::class)->only([
    'create'
]);

Route::post('items', [ItemController::class, 'store'])->name('items.store');

Route::get('items/{item}', [ItemController::class, 'show'])->name('items.show');

Route::get('items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');

Route::patch('items/{item}', [ItemController::class, 'update'])->name('items.update');

Route::delete('items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');