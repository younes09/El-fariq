<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\ReserveController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// Route::get('/fariq_index', function () {
//     return view('fariq_index');
// });

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/team',TeamController::class);

Route::resource('/leader',LeaderController::class);

Route::resource('/player',PlayerController::class);

Route::resource('/reserve',ReserveController::class);

Route::resource('/home', AdminController::class);
Route::post('/search', [AdminController::class,'search']);

Route::get('/{pages}', [AdminController::class,'getView'])->name('getView');

