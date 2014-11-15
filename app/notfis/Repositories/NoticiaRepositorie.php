<?php
/**
 * Created by PhpStorm.
 * User: Investigación2
 * Date: 27/10/14
 * Time: 12:00 AM
 */

namespace bscunsm\Repositories;


class NoticiaRepositorie {

    public function selectAll()
    {
        $noticias = \DB::table('noticias')
        			->select('noticias.id_noticia','noticias.url_image','noticias.fecha','noticias.titulo','tipo_noticia.descripcion')
        			->join('tipo_noticia','noticias.id_tiponoticia','=','tipo_noticia.id_tiponoticia')
        			->get();

        return $noticias;
    }
} 