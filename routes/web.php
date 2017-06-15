<?php

use App\Introslider;

Route::get('/slides', 'IntrosliderController@index');

Route::get('/', function () {

	$slides = Introslider::all();

    return view('layouts.master', compact('slides'));

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
