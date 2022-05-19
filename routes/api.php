<?php

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

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}',[BookController::class, 'show']);
Route::get('/books/search/{name}', [BookController::class, 'search']);


Route::post('/books', [BookController::class, 'store']);
Route::post('/books/{id}',[BookController::class, 'update']);
Route::post('/books/delete/{id}', [BookController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
