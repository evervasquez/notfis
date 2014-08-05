<?php


Route::get('/', ['as' => 'index', 'uses' => 'WebsController@index']);
Route::get('autoridades', ['as' => 'autoridades', 'uses' => 'WebsController@autoridades']);
