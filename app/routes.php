<?php

//Route::get('/', ['as' => 'hello', 'uses' => 'PerfilesController@getPerfiles']);

Route::get('/', function(){
    return View::make('hello');
});