<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

// Route::get('/', function () {
//     return view('create');
// });

Route::get('/', [TaskController::class, 'index'])->name('index');
Route::post('/', [TaskController::class, 'store'])->name('store');

Route::delete('/{task:id}', [TaskController::class, 'destroy'])->name('destroy');
Route::get('/{task:id}', [TaskController::class, 'edit'])->name('edit');
Route::post('/{task:id}', [TaskController::class, 'update'])->name('update');
