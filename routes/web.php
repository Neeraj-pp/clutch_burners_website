<?php

use App\Http\Controllers\ProfileController;
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
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/contact', [PageController::class, 'contact']);

// Admin routes
use App\Http\Controllers\AdminController;

Route::get('/admin/login', [AdminController::class, 'loginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout']);

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/edit-home', [AdminController::class, 'editHome']);
    Route::post('/update-home', [AdminController::class, 'updateHome']);

    Route::get('/edit-gallery', [AdminController::class, 'editGallery']);
    Route::post('/update-gallery', [AdminController::class, 'updateGallery']);
    Route::delete('/delete-gallery-image/{id}', [AdminController::class, 'deleteGalleryImage']);

    Route::get('/edit-contact', [AdminController::class, 'editContact']);
    Route::post('/update-contact', [AdminController::class, 'updateContact']);

});

use App\Http\Controllers\ContactController;


Route::get('/contact', [PageController::class, 'contact']);
Route::post('/submit-query', [ContactController::class, 'submitQuery'])->name('contact.submit');
