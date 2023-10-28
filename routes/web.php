<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
//use Inertia\Inertia;

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
    //return Inertia::render('Welcome', [
    return inertia('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return inertia('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/posts', [\App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/posts/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [\App\Http\Controllers\PostController::class, 'delete'])->name('post.delete');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::post('/users', [\App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('/users/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::patch('/users/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{user}', [\App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/tests', [\App\Http\Controllers\TestController::class, 'index'])->name('test.index');
    Route::get('/tests/create', [\App\Http\Controllers\TestController::class, 'create'])->name('test.create');
    Route::post('/tests', [\App\Http\Controllers\TestController::class, 'store'])->name('test.store');
    Route::get('/tests/{test}/edit', [\App\Http\Controllers\TestController::class, 'edit'])->name('test.edit');
    Route::patch('/tests/{test}', [\App\Http\Controllers\TestController::class, 'update'])->name('test.update');
    Route::delete('/tests/{test}', [\App\Http\Controllers\TestController::class, 'delete'])->name('user.delete');
});

Route::middleware(['auth', 'manager'])->group(function () {
    Route::get('/tests2', [\App\Http\Controllers\Test2Controller::class, 'index'])->name('test2.index');
    Route::get('/tests2/{test}/edit', [\App\Http\Controllers\Test2Controller::class, 'edit'])->name('test2.edit');
    Route::patch('/tests2/{test}', [\App\Http\Controllers\Test2Controller::class, 'update'])->name('test2.update');
});

require __DIR__.'/auth.php';
