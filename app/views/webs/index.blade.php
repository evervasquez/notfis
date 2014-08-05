@extends('layout')

@section('content')
<div class="container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="item active">
                <img src="./assets/img/slide/slide_1.jpg" alt="" />
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="./assets/img/slide/slide_2.jpg" alt="" />
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<div class="container">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="fa fa-graduation-cap"></span>
                                Formación Académica
                            </div>
                            <div class="panel-body">
                                <a href="#">
                                    <img src="./assets/img/links/p1.jpg" class="img-thumbnail aum" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="fa fa-group"></span>
                                Proyección Social
                            </div>
                            <div class="panel-body">
                                <a href="#">
                                    <img src="./assets/img/links/p2.jpg" class="img-thumbnail aum" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="fa fa-briefcase"></span>
                                Extensión Universitaria
                            </div>
                            <div class="panel-body">
                                <a href="#">
                                    <img src="./assets/img/links/p3.jpg" class="img-thumbnail aum" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-warning text-center">
                            <div class="panel-body">
                                <a href="#">
                                    <span class="fa fa-check-square fa-5x text-warning aum"></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                Acreditación
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-info text-center">
                            <div class="panel-body">
                                <a href="#">
                                    <span class="fa fa-cog fa-5x text-info aum"></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                Comisiones
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-success text-center">
                            <div class="panel-body">
                                <a href="#">
                                    <span class="fa fa-bank fa-5x text-success aum"></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                Transparencia
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-body">
                                <a href="#">
                                    <span class="fa fa-edit fa-5x text-primary aum"></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                Investigación
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-grey text-center">
                            <div class="panel-body">
                                <a href="#">
                                    <span class="fa fa-desktop fa-5x text-muted aum"></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                INTECI
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-danger text-center">
                            <div class="panel-body">
                                <a href="#">
                                    <span class="fa fa-user fa-5x text-danger aum"></span>
                                </a>
                            </div>
                            <div class="panel-footer">
                                Egresados
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <div class="dropdown">
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; width: 100%">
                                <li class="dropdown-header"><h4>Ultima Noticias</h4></li>
                                <li>
                                    <a tabindex="-1" href="#"><span class="fa fa-chevron-right"></span> Noticia 1</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#"><span class="fa fa-chevron-right"></span> Noticia 2</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#"><span class="fa fa-chevron-right"></span> Noticia 3</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#"><span class="fa fa-chevron-right"></span> Noticia 4</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#"><span class="fa fa-chevron-right"></span> Noticia 5</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-header"><h4>Proyectos de Investigación</h4></li>
                                <li class="dropdown-header"><h5><i class="fa fa-users"></i> Estudiantes</h5></li>
                                <li>
                                    <a tabindex="-1" href="#"><span class="fa fa-chevron-right"></span> Proyecto Estudiante 1</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#"><span class="fa fa-chevron-right"></span> Proyecto Estudiante 1</a>
                                </li>
                                <li class="dropdown-header"><h5><i class="fa fa-user"></i> Docentes</h5></li>
                                <li>
                                    <a tabindex="-1" href="#"><span class="fa fa-chevron-right"></span> Proyecto Docentes 1</a>
                                </li>
                                <li class="divider"></li>
                                <li class=""><a tabindex="-1" href="#">
                                        <h5>Bolsa de Trabajo</h5></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@overwrite