<?php


Route::get('/', ['as' => 'index', 'uses' => 'WebsController@index']);
Route::get('autoridades', ['as' => 'autoridades', 'uses' => 'WebsController@autoridades']);

Route::get('noticias', ['as' => 'noticias', 'uses' => 'NoticiasController@index']);

