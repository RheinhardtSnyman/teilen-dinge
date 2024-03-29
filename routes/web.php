<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// All Listings
Route::get('/', function () {
    $listing = Listing::get()->map(function ($item, $key) {
        $item['description'] = substr($item['description'], 0, 57).'...';

        return $item;
    })->all();

    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => $listing,
    ]);
});

// Listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id),
    ]);
});
