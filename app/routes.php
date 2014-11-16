<?php


Route::get('/', ['as' => 'index', 'uses' => 'WebsController@index']);
Route::get('autoridades', ['as' => 'autoridades', 'uses' => 'WebsController@autoridades']);

Route::get('noticias', ['as' => 'noticias', 'uses' => 'NoticiasController@index']);

Route::get('/send_message', function(){
    return View::make('message');
});
Route::get('send_message', ['as' => 'sendmessage', 'uses' => 'NoticiasController@sendMessage']);

Route::post('postnoticia', ['as' => 'postnoticia', 'uses' => 'NoticiasController@postNoticia']);

Route::post('registerUserGCM', ['as' => 'registerUserGCM', 'uses' => 'UsersController@registerUserGCM']);
