<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings', [
        'heading' => 'hi',
        'listings' => Listing::all(),
    ]);
});

Route::get("/posts/{id}", function($id) {
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    dd($request->name);
});
