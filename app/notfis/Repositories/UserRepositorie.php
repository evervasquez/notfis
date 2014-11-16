<?php

namespace notfis\Repositories;

use notfis\Entities\User;
use DB;

class UserRepositorie
{

    public function nuevoUserGCM($datos)
    {
        $user = new User();
        $user->name = $datos['name'];
        $user->email = $datos['email'];
        $user->gcm_regid = $datos['regId'];

        if ($user->save()) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserGCM($regid)
    {
        return DB::table('gcm_users')
            ->where('gcm_regid', '=', $regid)
            ->count();
    }
} 