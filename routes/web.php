<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/', [TestController::class, 'Home']);
Route::get('/home', [TestController::class, 'Home']);
// Route::get('/product', [TestController::class, 'Product']);
// Route::get('/about', [TestController::class, 'About']);
Route::get('/add', [TestController::class, 'Add']);
Route::post('/save', [TestController::class, 'Save']);
Route::get('/edit/{movie}', [TestController::class, 'Edit']);
Route::post('/edit/{movie}', [TestController::class, 'Update'])->name("update");
Route::get('/show/{movie}', [TestController::class, 'Show'])->name('ShowMovie');
Route::post('/remove/{movie}', [TestController::class, 'Remove'])->name('RemoveMovie');
