<?php
use App\Http\Controllers;
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

Route::get('/', [Controllers\MainController::class, 'show']);
Route::get('/prod/{id}', [Controllers\ProductController::class, 'show']);
Route::get('/buy/{id}', );

Route::get('/profile/{id}');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home/add', [Controllers\ProductController::class, 'add']);
