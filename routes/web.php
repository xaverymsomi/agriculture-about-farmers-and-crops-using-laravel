<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FarmManagementController;
use App\Http\Controllers\CropInformationController;

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
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/crops', [CropInformationController::class, 'index'])->name('crop.index');
    Route::get('/crops_create', [CropInformationController::class, 'create'])->name('crop.create');
    Route::post('/crops_create', [CropInformationController::class, 'store'])->name('crop.store');
    Route::get('/crops_edit/{id}', [CropInformationController::class,'edit'])->name('crop.edit');
    Route::get('/crops_show/{id}', [CropInformationController::class,'show'])->name('crop.show');
    Route::patch('/crops_update', [CropInformationController::class, 'update'])->name('crop.update');
    Route::delete('/crops_delete/{id}', [CropInformationController::class, 'destroy'])->name('crop.destroy');

}); 

require __DIR__.'/auth.php';


// ------------------Admin routes management  ------------- //
Route::prefix('admin')->middleware(['auth','role:admin'])->group(function () {
    // ------------------Admin routes management  ------------- //
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    

    // ------------------Admin routes management  ------------- //
    Route::get('/farmers', [AdminController::class, 'index'])->name('farmer');
    Route::get('/create_farmer', [AdminController::class, 'create'])->name('farmer.create');
    Route::post('/store_farmer', [AdminController::class, 'store'])->name('farmer.store');
    Route::get('/edit_farmer/{id}', [AdminController::class,'edit'])->name('farmer.edit');
    Route::get('/show_farmer/{id}', [AdminController::class,'show'])->name('farmer.show');
    Route::patch('/update_farmer', [AdminController::class, 'update'])->name('farmer.update');
    Route::delete('/delete_farmer/{id}', [AdminController::class, 'destroy'])->name('farmer.destroy');
});
