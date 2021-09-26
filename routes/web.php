<?php

use App\Http\Controllers\PageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function(){
//     return Inertia::render('Home');
// });

// Route::post('/login', [PageController::class, 'login'])->name('login');
// Route::post('/register', [PageController::class, 'register'])->name('register');
// Route::post('/delete_token', [PageController::class, 'delete_token'])->name('delete_token');

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/About-Us', [PageController::class, 'about'])->name('about');
Route::get('/Contact-Us', [PageController::class, 'contact'])->name('contact');
Route::get('/Blog-Posts', [PageController::class, 'posts'])->name('posts');
Route::get('/Make-Post', [PageController::class, 'addposts'])->name('addposts');
Route::get('/Manage-Categories', [PageController::class, 'categories'])->name('categories');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
