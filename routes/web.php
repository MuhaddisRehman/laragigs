<?php

use Illuminate\Support\Facades\Route;
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
//All Listing 
Route::get('/', function () {
    return view('template', [
        'view' => 'home',
        'heading' => ' Home',

    ]);
});
Route::get('/qr-code', function () {
    return view('template', [
        'view' => 'qr-code',
        'heading' => ' QR CODE',
    ]);
});
Route::get('/listings', function () {
    return view('template', [
        'view' => 'listings',
        'heading' => ' Listings',
        'Listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function ($id) {
    return view('template', [
        'view' => 'listing',
        'heading' => ' Listing',
        'listing' => Listing::find($id)
    ]);
});
Route::get('/smooth-test', function () {
    return view('template', [
        'view' => 'smooth',
        'heading' => ' Smooth Scroll Animation',

    ]);
});
