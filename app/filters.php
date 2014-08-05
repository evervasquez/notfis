<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function ($request) {
    //
});


App::after(function ($request, $response) {
    //
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function () {
    if (Auth::guest()) return Redirect::guest('/');
});


Route::filter('auth.basic', function () {
    return Auth::basic("usuario");
});

Route::filter('android.gcm',function($route, $request, $response){

    /*verificamos que venga de una respuesta json (Response::json())
     y que exista un registration_id en el input */

    if($response instanceof \Illuminate\Http\JsonResponse
        && Input::has('registration_id')){

        // Obtenemos el contenido de la respuesta
        $content = json_decode($response->getContent());

        AndroidGcm::addRegistrationId(Input::get('registration_id'), $content->user->id);
    }
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function () {
    if (Session::token() != Input::get('_token')) {
        throw new Illuminate\Session\TokenMismatchException;
    }
});
