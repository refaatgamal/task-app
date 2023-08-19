<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::controller(TaskController::class)->group(function () {
        Route::get('task', 'index')->name('task.index');
        Route::post('task', 'store')->name('task.store');
        Route::get('task/create', 'create')->name('task.create');
        Route::get('task/{task}', 'show')->name('task.show');
        Route::put('task/{task}', 'update')->name('task.update');
        Route::delete('task/{task}', 'destroy')->name('task.destroy');
        Route::get('task/{task}/edit', 'edit')->name('task.edit');
    });
});
