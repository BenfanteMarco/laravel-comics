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
    $socials = config('footer_socials');
    $footer_lists = config('footer_list');
    $banner_infos = config('banner_infos');
    $header_links = config('header_links');
    return view('home', compact('socials', 'footer_lists', 'banner_infos', 'header_links'));
})->name('home');

Route::get('/comics', function () {
    $socials = config('footer_socials');
    $footer_lists = config('footer_list');
    $banner_infos = config('banner_infos');
    $header_links = config('header_links');
    return view('home', compact('socials', 'footer_lists', 'banner_infos', 'header_links'));
})->name('comics');

Route::get('/movies', function () {
    $socials = config('footer_socials');
    $footer_lists = config('footer_list');
    $banner_infos = config('banner_infos');
    $header_links = config('header_links');
    return view('home', compact('socials', 'footer_lists', 'banner_infos', 'header_links'));
})->name('movies');
