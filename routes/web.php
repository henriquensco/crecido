<?php

use App\Http\Controllers\Owner\CreateOwnerController;
use App\Http\Controllers\Owner\ListOwnersController;
//use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Properties\CreatePropertiesController;
use App\Http\Controllers\Properties\ListPropertiesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function ($group) {
    Route::get('/owner', [ListOwnersController::class, 'show'])->name('owner.list');
    Route::get('/owner/create', [CreateOwnerController::class, 'create'])->name('owner.create');
    Route::post('/owner/create', [CreateOwnerController::class, 'store']);

    Route::get('/properties', [ListPropertiesController::class, 'show'])->name('properties.list');
    Route::get('/properties/create', [CreatePropertiesController::class, 'create'])->name('properties.create');
    Route::post('/properties/create', [CreatePropertiesController::class, 'store']);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
