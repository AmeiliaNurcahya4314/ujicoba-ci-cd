<?php

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

Route::get('/', [App\Http\Controllers\View::class, 'index'])->name('index');
Route::get('/get', [App\Http\Controllers\View::class, 'get'])->name('get');
Auth::routes();
Route::get('/sensor/{idAlat}/{dropsPerMinutes}/{kapasitas}/{status}', [App\Http\Controllers\View::class, 'sensor']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/regist', [App\Http\Controllers\regist::class, 'index'])->name('regist');
Route::post('/register', [App\Http\Controllers\Regist::class, 'create'])->name('register');
Route::get('/adddevice', [App\Http\Controllers\addDeviceController::class, 'index'])->middleware('auth')->name('adddevice');
Route::get('updates', [App\Http\Controllers\UpdateController::class, 'index'])->middleware('auth')->name('updates');
Route::post('update', [App\Http\Controllers\UpdateController::class, 'update']);
Route::post('adddevices', [App\Http\Controllers\addDeviceController::class, 'post']);
Route::get('/device', [App\Http\Controllers\addDeviceController::class, 'list'])->middleware('auth')->name('device');
Route::get('deletedevice/{id}',[App\Http\Controllers\UpdateController::class, 'delete']);


