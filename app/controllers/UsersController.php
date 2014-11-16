<?php
use notfis\Repositories\UserRepositorie;

class UsersController extends \BaseController
{
    protected $userRepo;

    public function __construct(UserRepositorie $userRepositorie)
    {
        $this->userRepo = $userRepositorie;
    }

    public function registerUserGCM()
    {
            $email = Input::get('email');
            $regId = Input::get('regId');

            $gcm = new GCM();
            $countUser = $this->userRepo->findUserGCM($regId);
            if ($countUser == 0) {
                $response = $this->userRepo->nuevoUserGCM(Input::all());
                if ($response) {
                    $registatoin_ids = array($regId);
                    $message = array("product" => "shirt");

                    $result = $gcm->send_notification($registatoin_ids, $message);
                    echo $result;
                } else {
                    echo 'hubo un error al ingresar al usuario';
                }
            } else {
                echo 'usted ya esta registrado, wachin';
            }
    }


}