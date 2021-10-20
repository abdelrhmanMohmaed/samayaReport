<?php

use App\Http\Controllers\chart\chartController;
use App\Http\Controllers\Lines\lineController;
use App\Http\Controllers\parts\PartController;
use App\Http\Controllers\User\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('auth')->group(function () {
    Route::get('/', [lineController::class, 'index'])->middleware('user');
    Route::post('/line/report', [lineController::class, 'sendReport'])->middleware('user');
    Route::get('/parts/show-table', [PartController::class, 'show']);
    Route::get('/chart/show-chart', [chartController::class, 'index'])->middleware('user');
    Route::get('/chart/show', [chartController::class, 'show'])->middleware('user');
    Route::get('/parts/toggle/{part}', [PartController::class, 'toggle'])->middleware('admin');

    //Dashboard
    Route::get('/parts/toggle-admin/{part}', [PartController::class, 'toggleAdmin'])->middleware(['admin', 'user']);
    Route::get('/parts/delete/{part}', [PartController::class, 'delete'])->middleware(['admin', 'user']);
    Route::get('/parts/update/{part}', [PartController::class, 'update'])->middleware(['admin', 'user']);
});
//Dashboard
Route::prefix('dashboard')->middleware(['auth', 'admin', 'user'])->group(function () {
    Route::get('/Users', [UserController::class, 'show']);
    Route::get('/create/New-Users', [UserController::class, 'create']);
    Route::post('/AddUsers', [UserController::class, 'store']);
    Route::get('/promote/{id}', [UserController::class, 'promote']);
    Route::get('/demote/{id}', [UserController::class, 'demote']);
    Route::get('/delete/{id}', [UserController::class, 'delete']);
});
