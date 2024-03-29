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
    $header_links = config('header_links');
    $footer_lists = config('footer_list');
    $banner_infos = config('banner_infos');
    $comics = config('comics');
    return view('comics', compact('socials', 'footer_lists', 'banner_infos', 'comics', 'header_links'));
})->name('comics');

Route::get('/comics/comic_info/{param}', function ($param) {
    $socials = config('footer_socials');
    $header_links = config('header_links');
    $footer_lists = config('footer_list');
    $banner_infos = config('banner_infos');
    $comics = config('comics');

    $single_comic = NULL;

    foreach ($comics as $item) {
        if ($item['id'] == $param) {
            $single_comic = $item;
        };
    };

    return view('comic_detail', compact('socials', 'footer_lists', 'banner_infos', 'comics', 'header_links', 'single_comic'));
})->name('comic_info');

Route::get('/movies', function () {
    $socials = config('footer_socials');
    $header_links = config('header_links');
    $footer_lists = config('footer_list');
    $banner_infos = config('banner_infos');
    return view('movies', compact('socials', 'footer_lists', 'banner_infos', 'header_links'));
})->name('movies');
