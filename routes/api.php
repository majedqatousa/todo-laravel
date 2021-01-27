<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catContoller;
use App\Http\Controllers\todoController;

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

Route::get('allCat',[catContoller::class,'getAll']);
Route::get('allTodo',[todoController::class,'getAll']);

Route::post('creatCat',[catContoller::class,'creat']);
Route::post('creatTodo',[todoController::class,'creat']);

Route::delete('deleteCat/{id}',[catContoller::class,'delete']);
Route::delete('deleteTodo/{id}',[todoController::class,'delete']);

Route::put('updateCat/{id}',[catContoller::class,'update']);
Route::put('updateTodo/{id}',[todoController::class,'update']);

Route::get('getCatTodos/{id}',[catContoller::class,'getCatTodos']);

Route::get('getCatById/{id}',[catContoller::class,'getCatById']);
Route::get('getTodoById/{id}',[todoController::class,'getTodoById']);
