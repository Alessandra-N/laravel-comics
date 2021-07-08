<?php

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


Route::get('/', function () {
    $comics = config('comics.data');
    $comics_collection = collect($comics);

    $data = [
        "links" => [
            "CHARACTERS",
            "COMICS",
            "MOVIES",
            "TV",
            "GAMES",
            "COLLECTIBLES",
            "VIDEOS",
            "FANS",
            "NEWS",
            "SHOP"
        ],
        
    ];

    return view('home', $data, compact('comics'));
})->name('home');

Route::get('/single', function () {
    

    return view('single');
})->name('single');