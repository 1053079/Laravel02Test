<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/posts/{id}', function ($id) {
    // ddd($id);
    return response('Post ' . $id);
});

Route::get('/search', function(Request $request) {
    return $request->name . ' ' . $request->city;
});

Route::get('/listings', function() {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function($id) {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [Listing::find($id)]
    ]);
});
