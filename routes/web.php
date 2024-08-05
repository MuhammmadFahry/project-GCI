<?php

use Illuminate\Support\Facades\Route;

Route::get('/app', function () {
    return view('app');
});