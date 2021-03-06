<?php

use App\Customer;
use App\Http\Controllers\Api\Customers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('customer')
    ->name('customer.')
    ->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('all');
        Route::get('/{id}', [CustomerController::class, 'show'])->name('show');
        Route::get('/search/{id}', [CustomerController::class, 'search'])->name('search');
    });
