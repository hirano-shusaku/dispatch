<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HakenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('haken/stop', [HakenController::class, 'stop'])->name('haken.stop');
    Route::get('haken/stop/{id}', [HakenController::class, 'stopshow'])->name('haken.stopshow');
    Route::resource('haken', HakenController::class);
    Route::get('haken/{haken}/ringi', [HakenController::class, 'ringi'])->name('haken.ringi');
    Route::get('haken/{haken}/shinki', [HakenController::class, 'shinki'])->name('haken.shinki');
    Route::get('haken/{haken}/mkaku', [HakenController::class, 'mkaku'])->name('haken.mkaku');
    Route::get('haken/{haken}/hkaku', [HakenController::class, 'hkaku'])->name('haken.hkaku');
    
    
    Route::get('profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    
    
    Route::middleware(['can:admin'])->group(function(){
        Route::get('profile/index', [ProfileController::class, 'index'])->name('profile.index');
        Route::delete('profile/{user}', [ProfileController::class, 'delete'])->name('profile.delete');
        
        //attach
        Route::patch('roles/{user}/attach', [RoleController::class, 'attach'])->name('role.attach');
        Route::patch('roles/{user}/detach', [RoleController::class, 'detach'])->name('role.detach');
    });
    
});



require __DIR__.'/auth.php';


