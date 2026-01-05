<?php

use App\Http\Controllers\TimeTableController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');


Route::middleware(['auth'])
    ->prefix('api')
    ->group(function () {
        Route::get('/timetable', [TimeTableController::class, 'index']);
        Route::put('/timetable/{period}', [TimetableController::class, 'update']);
    });
