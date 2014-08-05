@extends('layout')

@section('content')
<div class="container">
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="page-header">
                        <h3>Autoridades</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <div class="dropdown">
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display: block; position: static; width: 100%">
                                <li><a href="#"><i class="fa fa-graduation-cap"></i> Formación Académica</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-group"></i> Proyección Social</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-briefcase"></i> Extensión Universitaria</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="hover-warning"><i class="fa fa-check-square"></i> Acreditación</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="hover-info"><i class="fa fa-cog"></i> Comisiones</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="hover-success"><i class="fa fa-bank"></i> Transparencia</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="hover-primary"><i class="fa fa-edit"></i> Investigación</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="hover-muted"><i class="fa fa-desktop"></i> INTECI</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="hover-danger"><i class="fa fa-user"></i> Egresados</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@overwrite