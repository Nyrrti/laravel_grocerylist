<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

Route::get('/welcome', function () {
    return view('welcome');
});


// GET | Index page of items
Route::get('/items', [ItemController::class, 'index'])->name('items.index');

// GET | Create page for items
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

// POST | item
Route::post('/items', [ItemController::class, 'store'])->name('items.store');


Route::get('/items/{id}', function () {

})->name('items.show');
Route::get('/items/{id}/edit', function () {

})->name('items.edit');
Route::put('/items/{id}', function () {

})->name('items.update');

// DELETE | Delete items
Route::delete('/items/{id}', function () {
    Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');
})->name('items.destroy');

// Redirect to '/items' route
Route::redirect('/', '/items');