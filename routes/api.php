<?php

use App\Http\Controllers\Home\TicketsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('/home')->group(function () {
    Route::post('/criarTicket', [TicketsController::class, 'criarTicket']);
});
