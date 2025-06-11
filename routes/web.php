<?php

use Illuminate\Support\Facades\Route;
use VictorKipkoech\Portfolio\Http\Controllers\PortfolioController;
use VictorKipkoech\Portfolio\Http\Controllers\ContactController;

Route::group(['prefix' => '', 'as' => 'portfolio.'], function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('home');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/download-cv', [PortfolioController::class, 'downloadCV'])->name('download-cv');
});