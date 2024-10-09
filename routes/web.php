<?php

use App\Http\Controllers\EventCategoriesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\OrganizersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('events/events');
});

Route::get('/listOrganizers', function () {
    return view('organizers/listOrganizers');
});

Route::resource('events', EventsController::class);
Route::resource('organizers', OrganizersController::class);
Route::resource('event_categories', EventCategoriesController::class);
