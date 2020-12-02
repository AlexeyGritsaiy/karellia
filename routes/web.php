<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = App\Models\Post::all();
    return view('main', compact('posts'));
});
Route::get('/about', function () {
    return view('about');
});
//sss
Route::get('/tours', function () {
    return view('tours');
});
Route::get('/routes', function () {
    return view('routes');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/impression', function () {
    return view('impression');
});
Route::get('/activity', function () {
    return view('activity');
});
Route::get('/sights', function () {
    return view('sights');
});
Route::get('/gastronomy', function () {
    return view('gastronomy');
});
Route::get('/placing', function () {
    return view('placing');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
