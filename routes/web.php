<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

Route::get('/', [ListingController::class, 'index']);

// show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// store listing data
Route::post('/listings', [ListingController::class, 'store']);

// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// single listing
Route::get("/listings/{listing}",[ListingController::class, 'show'] );


//Show register create form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log user out
Route::post('/logout', [UserController::class, 'logout']);