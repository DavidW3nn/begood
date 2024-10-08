<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('pages.about', [
        'title' => 'About',
    ]);
});

Route::get('/report', function () {
    return view('pages.report', [
        'title' => 'Report',
    ]);
});

// Sinmpan local ke session
Route::get('/locale/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id', 'ch'])) {
        session(['app_locale' => $locale]);
    }
    return redirect()->back();
})->name('locale');
