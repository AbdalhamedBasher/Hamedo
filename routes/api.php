<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
// UsersController
// use App\model\pages;
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
Route::get('users',[UserController::class,'index']);
Route::post('users', [UserController::class,'store']);
Route::get('users/{id}',[ UserController::class,"show"]);
Route::put('users/{id}', [UserController::class,'update']); //why its force me to update the whole user information?
Route::delete("users/{id}",[UserController::class,"destroy"]);
Route::get('users/{id}/pages',[ UserController::class,"showpages"]);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// pages CRUD need groups an dneed auth and policy
Route::get('page', [PagesController::class,'index']);
Route::post('page', [PagesController::class,'index']);
Route::get('page/{id}', [PagesController::class,'show']);
Route::put('page/{id}',[PagesController::class,'update']);
Route::delete('page/{id}',[PagesController::class,'destroy']);

