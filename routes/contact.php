<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/contact', [ContactController::class, 'contact']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/show/{slug}', [ContactController::class, 'show'])->name('contact.show');
    Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
});
