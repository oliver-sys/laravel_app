<?php

use Illuminate\Support\Facades\Route;

Route::get('/hotdog', function () {
    return view('welcome');
});
