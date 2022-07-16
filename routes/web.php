<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::GET('Profile/index',[ProfilesController::class, 'index'])->name('Profiles.index');
Route::GET('Profile/create',[ProfilesController::class, 'create'])->name('Profiles.create');
Route::POST('Profile/store',[ProfilesController::class, 'store'])->name('Profiles.store');
Route::GET('Profile/show/{id}',[ProfilesController::class, 'show'])->name('Profiles.show');
Route::GET('Profile/{id}/edit',[ProfilesController::class, 'edit'])->name('Profiles.edit');
Route::PATCH('Profile/update',[ProfilesController::class, 'update'])->name('Profiles.update');
Route::DELETE('Profile/{id}/Destroy',[ProfilesController::class, 'destroy'])->name('Profiles.destroy');

Route::GET('Recipes/index', [RecipesController::class ,'index'])->name('Recipes.index');
Route::GET('Recipes/create', [RecipesController::class ,'create'])->name('Recipes.create');
Route::POST('Recipes/store', [RecipesController::class ,'store'])->name('Recipes.store');
Route::GET('Recipes/show/{id}', [RecipesController::class ,'show'])->name('Recipes.show');
Route::GET('Recipes/{id}/edit', [RecipesController::class ,'edit'])->name('Recipes.edit');
Route::PATCH('Recipes/update', [RecipesController::class ,'update'])->name('Recipes.update');
Route::DELETE('Recipes/{id}/Destroy', [RecipesController::class ,'destroy'])->name('Recipes.destroy');

