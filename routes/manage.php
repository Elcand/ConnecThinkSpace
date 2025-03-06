<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\StudioController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/hero/index', [HeroController::class, 'index'])->name('hero.index');
    Route::post('/hero/storeOrUpdate', [HeroController::class, 'storeOrUpdate'])->name('hero.storeOrUpdate');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/studio/index', [StudioController::class, 'index'])->name('studio.index');
    Route::get('/studio/create', [StudioController::class, 'create'])->name('studio.create');
    Route::post('/studio/store', [StudioController::class, 'store'])->name('studio.store');
    Route::get('/studio/{slug}', [StudioController::class, 'show'])->name('studio.show');
    Route::get('/studio/edit/{slug}', [StudioController::class, 'edit'])->name('studio.edit');
    Route::put('/studio/update/{slug}', [StudioController::class, 'update'])->name('studio.update');
    Route::delete('/studio/delete/{slug}', [StudioController::class, 'destroy'])->name('studio.delete');
});
