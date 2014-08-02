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


Route::filter('perfil', function () {

    if (Auth::check()) {

        $urlfull = URL::current();
        $modulo = explode("/", $urlfull);

        //dd($modulo);
        $perfil = Auth::user()->idperfil;
        $permisos = DB::table('permisos')
            ->join('modulos as m', 'permisos.idmodulo', '=', 'm.id')
            ->whereNull('permisos.deleted_at')
            ->where('permisos.idperfil', '=', $perfil)
            ->where('permisos.idmodulo', '<>', 1)
            ->select('permisos.idmodulo', 'm.url as modulo')
            ->get();

        //dd($permisos);
        $existe = false;
        foreach ($permisos as $permiso) {

            if ($permiso->modulo == $modulo[3]) {
                $existe = true;
            }
        }

        if ($existe == false) {
            return Redirect::to('error');
        }
    } else {
        return View::make('login');

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
