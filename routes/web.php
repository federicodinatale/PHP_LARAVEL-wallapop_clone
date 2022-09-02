<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;

use App\Http\Controllers\Ad;
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
//     return view('welcome');
// }) ->name("home");


Route::get("/", [PublicController::class, "index"]) ->name("ads.index");
Route::get("category/{category:name}/ads", [PublicController::class, "adsByCategory"])->name("category.ads");




Route::get('/ads/create', [AdController::class,'create'])->name('ads.create');
Route::get("/ads/{ad}", [AdController::class, "show"]) ->name("ads.show");



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
