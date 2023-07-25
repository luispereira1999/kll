<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

// página inicial
Route::get('/', [PostController::class, 'index']);

// autenticação
Route::get('/auth', [AuthController::class, 'index']);
Route::post('/auth/signup', [AuthController::class, 'signup']);
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout']);

// utilizadores
Route::get('/profile/{userId}', [UserController::class, 'index']);
Route::get('/account', [UserController::class, 'show']);
Route::put('/account/edit-data/{userId}', [UserController::class, 'updateData']);
Route::put('/account/edit-password/{userId}', [UserController::class, 'updatePassword']);

// posts
Route::get('/posts/{postId}', [PostController::class, 'show']);
Route::patch('/posts/update/{postId}', [PostController::class, 'update']);
Route::delete('/posts/delete/{postId}', [PostController::class, 'destroy']);
