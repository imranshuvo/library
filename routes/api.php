<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
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



Route::prefix('books')->group( function() {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/{id}',[BookController::class, 'show']);
    Route::get('/search/{name}', [BookController::class, 'search']);
});

Route::post('/admin/register', [AuthController::class, 'register']);
Route::post('/admin/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('/books', [BookController::class, 'store']);
    Route::put('/books/{id}',[BookController::class, 'update']);
    Route::delete('/books/{id}', [BookController::class, 'destroy']);
});
