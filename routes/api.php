<?php

use App\Http\Controllers\TodosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::resource('todos', TodosController::class);
Route::get('/todos/search/{title}', [TodosController::class, 'search']);

// Route::get('/todos', [TodosController::class, 'index']);
// Route::get('/todos/${id}', [TodosController::class, 'store']);
// Route::post('/todos', [TodosController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
