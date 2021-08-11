<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\UserController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [UserController::class, 'create']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
    // Route::post('comments', [CommentsController::class, 'create']);   
});

Route::get('users', [UserController::class, 'index']);

Route::get('pokemons', [PokemonController::class, 'index']);
Route::get('pokemons/{id}', [PokemonController::class, 'getPokemonById']);



//-----------------ROUTES COMMENTS-----------------------------------//
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/comments', [CommentsController::class, 'store']);
    Route::post('/createcomment', [CommentsController::class, 'create']);
    Route::put('/comments/{id}', [CommentsController::class, 'update']);
    Route::delete('/comments/{id}', [CommentsController::class, 'destroy']);
});
Route::get('comments', [CommentsController::class, 'index']);
Route::get('comments/{id}', [CommentsController::class, 'getCommentById']);