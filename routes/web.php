<?php

use App\Models\Character;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetaDDLController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\MetaAttributeController;
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
// All Lisitings
Route::get('/', [CharacterController::class, 'index']);

// Show create form
Route::get('/characters/create', [CharacterController::class, 'create']);
Route::post('/characters/create',[CharacterController::class, 'store']);

Route::get('/characters/create-page-2', [CharacterController::class, 'createPageTwo']);
Route::post('/characters/create-page-2',[CharacterController::class, 'storePageTwo']);
//store character data


// Single Listing
Route::get('/characters/{character}', [CharacterController::class, 'show']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
