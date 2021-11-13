<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BonusController;


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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [UserController::class, 'store']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);

// get method append to URL


Route::middleware(['auth:sanctum'])->group(function () 
{
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/search/{name}', [UserController::class, 'show']);
    Route::put('users/update/{id}', [UserController::class, 'update']);
    Route::delete('/remove/{id}', [UserController::class, 'destroy']);
    Route::get('/user', [UserController::class, 'show']);
    // BonusCOntroller Routes.
    Route::get('/add/bonus', [BonusController::class, 'show']);
    Route::get('/request/bonus', [BonusController::class, 'show']);
});