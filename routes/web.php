<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SettingController;



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

Route::get('settings', [SettingController::class, 'index']);

Route::post('settings', [SettingController::class, 'create'])->name('settings');


// Route::get('register', 'Registeration@index')->name('register');


// Route::get('/user', [UserController::class, 'index']);