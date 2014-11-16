<?php namespace notfis\Entities;

class Noticia extends \Eloquent {
    protected $softDelete = true;
    protected $fillable = [];
    protected $primaryKey = 'id_noticia';
    public $timestamps = false;
}