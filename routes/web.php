<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create')->middleware('auth');
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store')->middleware('auth');
Route::get('/recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->name('recipes.edit')->middleware('auth');
Route::put('/recipes/{id}', [RecipeController::class, 'update'])->name('recipes.update')->middleware('auth');
Route::delete('/recipes/{id}', [RecipeController::class, 'destroy'])->name('recipes.destroy')->middleware('auth');

Route::post('/like/{recipe_id}', [LikeController::class, 'like'])->name('likes.like');
Route::delete('/dislike/{recipe_id}', [LikeController::class, 'dislike'])->name('likes.dislike');

Route::post('/recipes/search', [SearchController::class, 'search'])->name('search.search');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile/delete', [ProfileController::class, 'destroy'])->name('profile.destroy');
