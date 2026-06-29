<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Models\Item;

Route::get('/welcome', function () {
    return view('welcome');
});


// GET | Index page of items
Route::get('/items', [ItemController::class, 'index'])->name('items.index');

// GET | Create page for items
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

// POST | item
Route::post('/items', [ItemController::class, 'store'])->name('items.store');

// GET | Edit item
Route::get('/items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit');

// PUT | Edit item
Route::put('/items/{item}', [ItemController::class, 'update'])->name('items.update');

// DELETE | Delete items
Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');

// Redirect to '/items' route
Route::redirect('/', '/items');