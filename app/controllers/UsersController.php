<?php

use bscunsm\Repositories\UserRepositorie;
use bscunsm\Managers\UsersManagers;
class UsersController extends \BaseController
{
    protected $userRepo;

    public function __construct(UserRepositorie $userRepositorie)
    {
        $this->userRepo = $userRepositorie;
    }

    public function index()
    {
        return View::make('empleados.index');
    }

    public function getUsuarios()
    {
        return $this->userRepo->getUsuarios();
    }

    public function action()
    {
        $datos = Input::all();

        $manager = new UsersManagers($datos);

        $response = $this->crud($this->userRepo, $manager, $datos);

        return $response;
    }

    public function findEditar()
    {
        $id = Input::get('id');
        return $this->userRepo->findEditar($id);
    }
}