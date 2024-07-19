<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/event/welcome',[EventController::class,'home'])->name('event.welcome');
Route::get('/event/index',[EventController::class,'index'])->name('event.index');

Route::get('/event/create',[EventController::class,'create'])->name('event.create');

Route::post('/event/store', [EventController::class, 'store'])->name('event.store');

Route::get('/event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
Route::put('/event/{id}', [EventController::class, 'update'])->name('event.update');


Route::delete('/event/{event}', [EventController::class, 'destroy'])->name('event.destroy');


