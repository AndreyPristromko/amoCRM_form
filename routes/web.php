<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('form');
});

Route::post('/submit', 'App\Http\Controllers\SubmitController@submit')->name('form');
