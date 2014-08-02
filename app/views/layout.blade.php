<html lang="es">
<head>
    {{-- start: Meta --}}
    <meta charset="utf-8">

    <title>bscunsm</title>
    {{-- end: Meta --}}

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" >

    {{-- start: Mobile Specific --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- end: Mobile Specific --}}

    {{-- start: CSS --}}
    {{ HTML::style('assets/css/bootstrap.min.css'); }}
    {{ HTML::style('assets/css/font-awesome.min.css'); }}
    {{ HTML::style('assets/css/dataTables.tableTools.css'); }}
    {{ HTML::style('assets/css/dataTables.responsive.css'); }}

    <!--[if IE 7]>
    {{ HTML::style('assets/css/font-awesome-ie7.min.css'); }}
    <![endif]-->
    <!-- page specific plugin styles -->
    {{ HTML::style('assets/fontawesome/css/font-awesome.min.css'); }}
    {{ HTML::style('assets/css/jquery-ui-1.10.3.full.min.css'); }}
    {{ HTML::style('assets/css/chosen.min.css'); }}


    <!-- fonts -->

    {{ HTML::style('assets/css/ace-fonts.css'); }}

    <!-- ace styles -->

    {{ HTML::style('assets/css/ace.min.css'); }}

    <!-- extra -->

    {{ HTML::style('assets/css/extra.css'); }}


    {{ HTML::style('assets/css/main_1.css'); }}

    {{ HTML::style('assets/css/main.css'); }}
    {{-- end: CSS --}}

    {{ HTML::script('assets/js/ace-extra.min.js'); }}
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    {{ HTML::script('assets/js/html5shiv.js'); }}
    {{ HTML::script('assets/js/respond.min.js'); }}

    <![endif]-->

    <script type="text/javascript">
        window.jQuery || document.write("<script src='/assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
    </script>
    <!--[if IE]>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='/assets/js/jquery-1.10.2.min.js'>" + "<" + "/script>");
    </script>
    <![endif]-->

    <script type="text/javascript">
        if ("ontouchend" in document)
            document.write("<script src='/assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>


    {{ HTML::script('assets/js/main.js') }}

    {{ HTML::script('assets/js/jquery-ui-1.10.3.full.min.js'); }}
    {{ HTML::script('assets/js/jquery.ui.touch-punch.min.js'); }}
    <title>bscunsm</title>
</head>
<body>

{{-- <a href="javascript:pagina('planes','Plans','mod2')">perfil</a>--}}

<div class="wrapper">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-2 logo">
                    {{HTML::image('assets/img/bscunsmlogo.png','Logo',array('width' => '160px','height'=>'25px'))}}
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3">
                            <div id="tour-searchbox" class="input-group searchbox">
                                <input type="search" class="form-control" placeholder="enter keyword here...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                        </button>
									</span>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="col-md-9">
                                <div class="top-bar-right">
                                    <!-- responsive menu bar icon -->
                                    <a href="#" class="hidden-md hidden-lg main-nav-toggle"><i
                                            class="fa fa-bars"></i></a>
                                    <!-- end responsive menu bar icon -->
                                    <!--<button type="button" id="start-tour" class="btn btn-link"><i class="fa fa-refresh"></i> Start Tour</button>-->
                                    <!--<button type="button" id="global-volume" class="btn btn-link btn-global-volume"><i class="fa fa-volume-up"></i> <span
                                            class="badge element-bg-color-blue">New</span></button>-->
                                    <div class="notifications">
                                        <ul>
                                            <!-- notification: inbox -->
                                            <li class="notification-item inbox">
                                                <div class="btn-group">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-envelope"></i><span class="count">2</span>
                                                        <span class="circle"></span>
                                                    </a>

                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="notification-header">
                                                            <em>You have 2 unread messages</em>
                                                        </li>
                                                        <li class="inbox-item clearfix">
                                                            <a href="#">
                                                                <div class="media">
                                                                    <div class="pull-left" href="#">
                                                                        {{HTML::image('assets/img/avatars/avatar5.png','Antonio',array('class' => 'media-object'))}}

                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="media-heading name">Antonius</h5>

                                                                        <p class="text">The problem just happened this
                                                                            morning. I can't see ...</p>
                                                                        <span class="timestamp">4 minutes ago</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="notification-footer">
                                                            <a href="#">View All Messages</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <!-- end notification: inbox -->

                                            <!-- notification: general -->
                                            <li class="notification-item general">
                                                <div class="btn-group">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                        <i class="fa fa-bell"></i><span class="count">8</span>
                                                        <span class="circle"></span>
                                                    </a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li class="notification-header">
                                                            <em>You have 8 notifications</em>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <i class="fa fa-comment green-font"></i>
                                                                <span class="text">New comment on the blog post</span>
                                                                <span class="timestamp">1 minute ago</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <!-- end notification: general -->
                                        </ul>
                                    </div>

                                    <!-- logged user and the menu -->
                                    <div class="logged-user">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                                {{HTML::image('assets/img/avatars/avatar5.png','img perfil',array('width' => '25px','height'=>'25px'))}}
                                                <span class="name">{{ Auth::user()->nombres }} {{ Auth::user()->apellidos }}</span> <span
                                                    class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-user"></i>
                                                        <span class="text"> Perfil</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-cog"></i>
                                                        <span class="text"> Configuración</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="./logout">
                                                        <i class="fa fa-power-off"></i>
                                                        <span class="text"> Cerrar Sesión</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end logged user and the menu -->
                                </div>
                                <!-- /top-bar-right -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-2 left-sidebar">
                    <nav class="main-nav">
                        <ul class="main-menu">
                        </ul>
                    </nav>
                </div>
                <div class="col-md-10 content-wrapper">
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="breadcrumb">
                                <li>
                                    <i class="fa fa-home"></i>
                                    <a href="./">Inicio</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <div class="top-content">
                                <ul class="list-inline mini-stat">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    @section('content')

                    <div class="row">
                        <div class="col-xs-12">
                            {{-- PAGE CONTENT ENDS --}}
                            <div class="center">

                            </div>

                        </div>{{-- /.col --}}
                    </div>{{-- /.row --}}
                    @show

                </div>
            </div>
        </div>
    </div>
</div>
<footer class="text-center">
    Copyright 2014 - balanced scorecard
</footer>

<!--[if lte IE 8]>
{{ HTML::script('assets/js/excanvas.min.js'); }}
<![endif]-->

{{ HTML::script('assets/js/bootstrap.min.js'); }}
{{ HTML::script('assets/js/bootstrap-tour.custom.js'); }}
{{ HTML::script('assets/js/king-common.min.js'); }}
{{ HTML::script('assets/js/chosen.jquery.min.js'); }}
{{ HTML::script('assets/js/ace-elements.min.js'); }}
{{ HTML::script('assets/js/bootbox.min.js'); }}
{{ HTML::script('assets/js/dataTables/jquery.dataTables.js') }}
{{ HTML::script('assets/js/dataTables/jquery.dataTables.bootstrap.js') }}
{{ HTML::script('assets/js/dataTables/dataTables.tableTools.js') }}
{{ HTML::script('assets/js/dataTables/dataTables.responsive.js') }}
{{ HTML::script('assets/js/ace.min.js'); }}

{{ HTML::script('assets/js/validaciones.js') }}
</body>
</html>