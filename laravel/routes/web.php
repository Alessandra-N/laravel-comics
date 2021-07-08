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
        "main_links" => [
            [
                "src" => "comics-digital-comics.png",
                "title" => "digital comics"
            ],
            [
                "src" => "comics-merchandise.png",
                "title" => "dc merchandise"
            ],
            [
                "src" => "comics-subscriptions.png",
                "title" => "subscription"
            ],
            [
                "src" => "comics-shop-locator.png",
                "title" => "Comic shop locator"
            ],
            [
                "src" => "dc-power-visa.svg",
                "title" => "dc power visa"
            ],
        ]
    ];

    return view('home', $data, compact('comics'));
})->name('home');

Route::get('/single', function () {
    

    return view('single');
})->name('single');