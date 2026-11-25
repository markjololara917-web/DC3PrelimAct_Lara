<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('/showroom', function () {
    return view('showroom');
})->middleware(['auth'])->name('showroom');

require __DIR__.'/auth.php';