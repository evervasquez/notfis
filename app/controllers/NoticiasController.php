<?php
use notfis\Repositories\NoticiaRepositorie;
use notfis\Repositories\UserRepositorie;
class NoticiasController extends \BaseController
{
    protected $noticiaRepo;
    protected $userRepo;

    public function __construct(NoticiaRepositorie $noticiaRepositorie, UserRepositorie $userRepositorie)
    {
        $this->noticiaRepo = $noticiaRepositorie;
        $this->userRepo = $userRepositorie;
    }

    public function index()
    {
        $data['noticias'] = $this->noticiaRepo->selectAll();
        return $data;
    }


    public function postNoticia()
    {
        $datos = Input::all();

        $file = Input::file('imagen');

        $ruta = DS . 'assets' . DS . 'img' . DS . 'notiImages';

        $destinationPath = public_path() . sprintf($ruta, str_random(8));

        $file->move($destinationPath, $file->getClientOriginalName());

        //url imagen
        $urlimagen = $file->getClientOriginalName();

        $datos['imagen_url'] =  "http://".$_SERVER['SERVER_NAME']."/assets/img/notiImages/".$urlimagen;;

        $noticia = $this->noticiaRepo->nuevoNoticiaGCM($datos);

        $this->sendMessageAll($noticia);

        if (count($noticia) > 0) {
            return Redirect::to('send_message')
                ->with('success', 'su noticia fue ingresada con exito');
        } else {
            return Redirect::to('/send_message')
                ->with('error', 'hubo un error al ingresar su noticia');
        }
    }

    public function sendMessage()
    {
        $datos = DB::table('gcm_users')->get();
        return View::make('message',compact('datos'));
    }

    private function sendMessageAll($noticia)
    {
        $gcm = new GCM();
        $message = array("price" => $noticia);

        $totalUser = DB::table('gcm_users')->get();

        foreach($totalUser as $user)
        {
            $registatoin_ids = array($user->gcm_regid);
            $gcm->send_notification($registatoin_ids, $message);
        }

    }
}