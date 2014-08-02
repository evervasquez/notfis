<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 20/07/14
 * Time: 11:36 AM
 */

namespace bscunsm\Managers;


class UsersManagers extends BaseManagers{
    public function getRules()
    {
        $rules = [
            'codigo' => 'alpha_dash',
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email|unique:usuarios,email',
            'perfil' => 'required|numeric',
            'clave' => 'required',
            'usuario' => 'required|alpha_dash|min:3'
        ];

        return $rules;
    }

} 