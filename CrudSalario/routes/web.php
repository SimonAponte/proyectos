<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\WorkdayController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employees', EmployeeController::class);

Route::get('workdays/create/{id}', [WorkdayController::class, 'create'])->name('workdays.create');

Route::post('workdays/store', [WorkdayController::class, 'store'])->name('workdays.store');

Route::get('workdays/report/{id}', [WorkdayController::class, 'report'])->name('workdays.salary');
