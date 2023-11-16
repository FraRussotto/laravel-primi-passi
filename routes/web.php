<?php

use Illuminate\Support\Facades\Route;

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
    $pages_links = ['home', 'team', 'about-us'];
    return view('nav', compact('pages_links'));
});
Route::get('/home', function () {
    $first_word = 'Hello';
    $second_word = 'World';
    $pages_links = ['home', 'team', 'about-us'];
    return view('home', compact('first_word', 'second_word'));
});
Route::get('/team', function () {
    $first_word = 'Team';
    $pages_links = ['home', 'team', 'about-us'];
    return view('team', compact('first_word'));
});
Route::get('/about-us', function () {
    $first_word = 'About-us';
    $pages_links = ['home', 'team', 'about-us'];
    return view('about-us', compact('first_word'));
});
