<?php

namespace bscunsm\Repositories;

use bscunsm\Entities\User;
use DB;

class UserRepositorie
{

    //funcion para recuperar los empleados
    public function getUsuarios()
    {
        $usuarios = DB::table('usuarios')
            ->join('perfiles', 'usuarios.idperfil', '=', 'perfiles.id')
            ->whereNull('usuarios.deleted_at')
            ->select('usuarios.id as id','usuarios.codigo','usuarios.nombres', 'usuarios.apellidos', 'usuarios.email', 'usuarios.usuario','perfiles.descripcion as perfil')
            ->get();

        return $usuarios;
    }

    public function nuevo($datos)
    {
        $user = new User();
        $user->codigo = $datos['codigo'];
        $user->nombres = $datos['nombres'];
        $user->apellidos = $datos['apellidos'];
        $user->email = $datos['email'];
        $user->idperfil = $datos['perfil'];
        $user->clave = \Hash::make($datos['clave']);
        $user->usuario = $datos['usuario'];
        $user->save();

        $idmax = \DB::table('usuarios')->max('id');

        $empleado = $this->find($idmax);
        return $empleado;
    }

    public function editar($datos)
    {
        $user = User::find($datos['id']);
        $user->codigo = $datos['codigo'];
        $user->nombres = $datos['nombres'];
        $user->apellidos = $datos['apellidos'];
        $user->email = $datos['email'];
        $user->idperfil = $datos['perfil'];
        $user->clave = \Hash::make($datos['clave']);
        $user->usuario = $datos['usuario'];
        $user->save();

        return $this->find($datos['id']);
    }

    public function eliminar($datos)
    {
        $user = User::find($datos['id']);
        $user->delete();

    }

    public function findEditar($id)
    {
        $user = \DB::table('usuarios')
            ->join('perfiles as p', 'usuarios.idperfil', '=', 'p.id')
            ->where('usuarios.id', $id)
            ->whereNull('usuarios.deleted_at')
            ->select('usuarios.id as id','usuarios.codigo','p.id as idperfil','usuarios.nombres','usuarios.apellidos'
                        ,'usuarios.email','usuarios.usuario')
            ->get();

        return $user;
    }

    public function find($id)
    {
        $user = \DB::table('usuarios')
            ->join('perfiles as p', 'usuarios.idperfil', '=', 'p.id')
            ->where('usuarios.id', $id)
            ->whereNull('usuarios.deleted_at')
            ->select('usuarios.id as id','usuarios.codigo','usuarios.nombres','usuarios.apellidos'
                ,'usuarios.email','usuarios.usuario','p.descripcion as perfil')
            ->get();

        return $user;
    }
} 