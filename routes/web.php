<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ThematicAreasController;

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

Route::get('/', [IndexController::class, 'index'])->name('web.index');
Route::get('/about-us', [IndexController::class, 'about'])->name('web.about');
Route::group(['prefix' => 'thematic-areas', 'as' => 'ta.'], function () {
    Route::get('/health-and-nutrition', [ThematicAreasController::class, 'health'])->name('health');
    Route::get('/agriculture-and-livelihood', [ThematicAreasController::class, 'agriculture'])->name('agriculture');
    Route::get('/education-and-youth-empowerment', [ThematicAreasController::class, 'education'])->name('education');
    Route::get('/renewable-energy', [ThematicAreasController::class, 'energy'])->name('energy');
    Route::get('/water-and-sanitation', [ThematicAreasController::class, 'water'])->name('water');
});
