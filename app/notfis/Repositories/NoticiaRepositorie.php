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
            ->select('noticias.id_noticia', 'noticias.url_image', 'noticias.fecha', 'noticias.titulo', 'tipo_noticia.descripcion')
            ->join('tipo_noticia', 'noticias.id_tiponoticia', '=', 'tipo_noticia.id_tiponoticia')
            ->get();

        return $noticias;
    }

    public function nuevoNoticiaGCM($datos)
    {
        $noticia = new Noticia();
        $noticia->id_tiponoticia = $datos['categoria_id'];
        $noticia->url_image = $datos['imagen_url'];
        $noticia->titulo = $datos['titulo'];
        $noticia->descripcion = $datos['descripcion'];
        $noticia->descripcion = Carbon::now();

        if ($noticia->save()) {

            $idmax = \DB::table('noticias')
                ->max('id_noticia');
            return \DB::table('noticias')->where('id_noticia', '=', $idmax)->get();
        } else {
            return null;
        }
    }
} 