<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/events/events');
});
