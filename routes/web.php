<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/projects', [AdminProjectController::class, 'index'])->name('projects');
        Route::get('/projects/create', [AdminProjectController::class, 'create'])->name('projects.create');
        Route::post('projects/store', [AdminProjectController::class, 'store'])->name('projects.store');


        Route::get('/projects/{project}', [AdminProjectController::class, 'edit'])->name('project.edit');
        Route::patch('/projects/{project}', [AdminProjectController::class, 'update'])->name('project.update');
        Route::delete('/projects/{project}', [AdminProjectController::class, 'destroy'])->name('project.destroy');
    });


require __DIR__ . '/auth.php';
