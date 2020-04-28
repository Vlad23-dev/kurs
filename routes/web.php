<?php

use Illuminate\Support\Facades\Route;
use App\Models\Person;

Route::get('/', function () {
    return view('homePage');
})->name('home-page');

Route::get('/personalInformation', function () {
    return view('personalInformation', ['data' => Person::inRandomOrder()->get()]);
})->name('personal-information');

Route::post('/submit', 'PersonController@submit')->name('submit-information');