<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>

    <title>FISI - UNSM-T :: Facultad de Ingenieria de Sistemas e Informática de la Universidad Nacional de San Martin -
        Tarapoto</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width"/>

    {{ HTML::style('assets/css/bootstrap.min.css'); }}
    {{ HTML::style('assets/css/font-awesome.min.css'); }}
    {{ HTML::style('assets/css/main.css'); }}

    <script type="application/javascript">
        var base_url = '/';
    </script>
</head>
<body>
<header>
    <div class="container">
        <div class="row" style="vertical-align: middle">
            <div class="col-md-10">
                <a href="./">
                    <div class="img-banner">
                        {{ HTML::image('assets/img/logo.jpg','Logo FISI',array('width' => '70px')) }}
                    </div>
                    <div class="txt-banner">
                        <h3>FACULTAD DE INGENIERÍA DE SISTEMAS E INFORMÁTICA</h3>
                        <h4>Universidad Nacional de San Martin - Tarapoto</h4>
                    </div>
                </a>
            </div>
            <div class="col-md-2 text-right">
                <div class="row">
                    <div class="col-sm-12 col-xs-6">
                        <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-search"></i>
                              </span>
                            <input type="text" class="form-control input-sm" placeholder="Buscar...">
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-6">
                        <div class="social">
                            <a href="https://www.youtube.com/" target="_blank" title="YouTube">
                                <span class="fa fa-youtube fa-2x text-danger aum"></span>
                            </a>
                            <a href="https://www.facebook.com/" target="_blank" title="Facebook">
                                <span class="fa fa-facebook-square fa-2x text-info aum"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="navbar-default navbar-static-top">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".header-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav class="collapse navbar-collapse header-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                        <span class="fa fa-users"></span>
                        Nosotros
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="./nosotros/autoridades">Autoridades</a></li>
                        <li><a href="#">Misión</a></li>
                        <li><a href="#">Visión</a></li>
                        <li><a href="#">Objetivos</a></li>
                        <li><a href="#">Organigrama</a></li>
                        <li><a href="#">Comisiones</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-list-alt"></span>
                        Noticias
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-calendar"></span>
                        Eventos
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-camera"></span>
                        Galería
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-phone"></span>
                        Contáctenos
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

@yield('content')

<footer>
    <div class="well">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h3><i class="fa fa-users"></i> Nosotros</h3>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Autoridades</a></p>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Misión</a></p>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Visión</a></p>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Objetivos</a></p>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Organigrama</a></p>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Comisiones</a></p>
                </div>
                <div class="col-md-3">
                    <h3><i class="fa fa-graduation-cap"></i> Escuela</h3>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Escuela Academica Profesional de Ingenieria de
                            Sistemas e Informática</a></p>

                    <h3><i class="fa fa-laptop"></i> Investigación</h3>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Instituto de Investigación</a></p>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Software y Toma de Decisiones</a></p>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Redes de computadoras</a></p>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Inteligencia Artificial</a></p>
                </div>
                <div class="col-md-3">
                    <h3><i class="fa fa-desktop"></i> INTECI</h3>

                    <p><a href="#"><i class="fa fa-chevron-right"></i> Cursos</a></p>

                    <h3><i class="fa fa-calendar"></i> Eventos</h3>

                    <h3><i class="fa fa-camera"></i> Galeria</h3>

                    <h3><i class="fa fa-envelope"></i> Contáctenos</h3>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-map-marker"></i> Estamos Ubicados en:</h3>

                    <p>Jr. Amorarca #315 - Morales - San Martin - Perú</p>

                    <p><i class="fa fa-phone"></i> 52 1402 - 52 5987 - 52 4074</p>

                    <h3>Busquenos en la Redes Sociales</h3>

                    <div class="social text-center">
                        <a href="https://www.youtube.com/" target="_blank" title="YouTube">
                            <span class="fa fa-youtube fa-5x aum"></span>
                        </a>
                        <a href="https://www.facebook.com/" target="_blank" title="Facebook">
                            <span class="fa fa-facebook-square fa-5x aum"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="container text-center">
            <i class="fa fa-flag"></i>
            Facultad de Ingenieria de Sistemas e Informática<br/>
            Universidad Nacional de San Martín<br/>
            2014
        </div>
    </div>
</footer>
{{ HTML::script('assets/js/jquery.min.js') }}
{{ HTML::script('assets/js/bootstrap.min.js') }}
{{ HTML::script('assets/js/bootstrap-hover-dropdown.min.js') }}
</body>
</html>
