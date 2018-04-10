<?php


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');
Route::get('/messages', 'PagesController@getMessages');

Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');