<?php

use App\Http\Controllers\EventCategoriesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\master_events;
use App\Http\Controllers\OrganizersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('events.index');
});

Route::resource('events', EventsController::class);
Route::resource('organizers', OrganizersController::class);
Route::resource('event_categories', EventCategoriesController::class);
Route::resource('master_events', master_events::class);
