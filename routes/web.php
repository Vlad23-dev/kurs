<?php

use Illuminate\Support\Facades\Route;
use App\Models\Person;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/motobuying', function () {
    return view('motobuying');
})->name('motobuying');

Route::get('/motonews', function () {
    return view('motonews');
})->name('motonews');

Route::get('/motoinfo', function () {
    return view('motoinfo');
})->name('motoinfo');

Route::get('/motoconteiner', function () {
    return view('motoconteiner');
})->name('motoconteiner');

