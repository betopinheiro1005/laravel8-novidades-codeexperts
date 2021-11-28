<?php

use \App\Models\User;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

/* Antes era assim... */
// Route::get('/', 'TestController@index');

/* No Laravel 8... */
// Route::get('/', 'App\Http\Controllers\TestController@index');
// Route::get('/', ['App\Http\Controllers\TestController', 'index']);
Route::get('/test', [TestController::class, 'index']);

Route::get('/factories', function(){
    User::factory()->count(4)->create();
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
