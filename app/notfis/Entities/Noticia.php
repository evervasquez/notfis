<?php namespace notfis\Entities;

class Noticia extends \Eloquent {
    protected $softDelete = true;
    protected $fillable = [];
    public $timestamps = false;
}