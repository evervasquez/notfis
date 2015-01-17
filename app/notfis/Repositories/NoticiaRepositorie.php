<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 27/10/14
 * Time: 12:00 AM
 */

namespace notfis\Repositories;


use Carbon\Carbon;
use notfis\Entities\Noticia;

class NoticiaRepositorie
{

    public function selectAll()
    {
            
        $noticias = \DB::table('noticias')
            ->select('noticias.id_noticia', 'noticias.url_image', 'noticias.fecha', 'noticias.titulo', 'noticias.descripcion as noticia','tipo_noticia.descripcion')
            ->join('tipo_noticia', 'noticias.id_tiponoticia', '=', 'tipo_noticia.id_tiponoticia')
            ->orderBy('noticias.fecha','desc')
            ->get();


        foreach ($noticias as $key => $noticia) {
                  $noticias[$key]->id_noticia = $noticia->id_noticia;
                  $noticias[$key]->url_image =$noticia->url_image;
                  $noticias[$key]->fecha = $noticia->fecha;
                  $noticias[$key]->titulo = $noticia->titulo;
                  $noticias[$key]->descripcion = $noticia->descripcion;
                  $noticias[$key]->noticia = $noticia->noticia;
        }
        
        return $noticias;
    }

    public function nuevoNoticiaGCM($datos)
    {
        $noticia = new Noticia();
        $noticia->id_tiponoticia = $datos['categoria_id'];
        $noticia->url_image = $datos['imagen_url'];
        $noticia->titulo = $datos['titulo'];
        $noticia->descripcion = $datos['descripcion'];
        $noticia->fecha = Carbon::now();

        if ($noticia->save()) {

            $idmax = \DB::table('noticias')
                ->max('id_noticia');
                return $this->getNoticia($idmax);
            // return \DB::table('noticias')->where('id_noticia', '=', $idmax)->get();
        } else {
            return null;
        }
    }

    public function getNoticia($idmax){
        $noticias = \DB::table('noticias')
            ->select('noticias.id_noticia', 'noticias.url_image', 'noticias.fecha', 'noticias.titulo', 'noticias.descripcion as noticia','tipo_noticia.descripcion')
            ->join('tipo_noticia', 'noticias.id_tiponoticia', '=', 'tipo_noticia.id_tiponoticia')
            ->orderBy('noticias.fecha','desc')
            ->where('id_noticia', '=', $idmax)
            ->get();

            return $noticias;
    }
} 