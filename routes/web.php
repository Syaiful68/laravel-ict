<?php

use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Ticketing/index');
});

Route::resource('ticket', TicketController::class);
