<?php

class UserLogin extends BaseController
{

    public function user()
    {
        // Guardamos en un arreglo los datos del usuario.
        $inputCheck = Input::get('remember');
        $userdata = array(
            'usuario' => Input::get('usuario'),
            'clave' => Input::get('clave')
        );

        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if (Auth::attempt($userdata, ($inputCheck == 'on') ? true : false))
        {
            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('/');

        } else {

            // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
            Session::flash('message', 'Datos incorrectos!');
            return Redirect::to('/');
        }
    }

    public function logOut()
    {
        Auth::logout();
        return Redirect::to('/')
            ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }

}