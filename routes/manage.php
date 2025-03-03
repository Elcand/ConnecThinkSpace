<?php

use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/hero/index', [HeroController::class, 'index'])->name('hero.index');
    Route::get('/hero/storeOrUpdate', [HeroController::class, 'storeOrUpdate'])->name('hero.storeOrUpdate');
});
