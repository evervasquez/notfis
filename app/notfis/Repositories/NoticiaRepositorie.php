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
                    ->get();

        return $noticias;
    }
} 