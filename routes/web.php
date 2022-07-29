<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\RecipesController;
use App\Http\Controllers\ReviewsController;
use App\Models\Recipe;

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

    $recipes = Recipe::all();

    return view('index', compact('recipes') );
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth'], 'as' => 'user.'], function () {
    Route::resource('profile', ProfilesController::class)->only(['index', 'update']);
    Route::get('edit-profile', [ProfilesController::class, 'editProfile'])->name('profile.edit');
    Route::resource('Recipes', RecipesController::class);

    Route::resource('Recipes/{id}/Reviews', ReviewsController::class)->shallow();
});

