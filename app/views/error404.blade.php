@extends('login')

@section('content')
<!-- begin MAIN PAGE CONTENT -->
<div id="page-wrapper">

    <div class="page-content">
        <!-- /.row -->
        <!-- end PAGE TITLE ROW -->

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <h1 class="error-title">404</h1>
                <h4 class="error-msg"><i class="fa fa-warning text-red"></i> Pagina no encontrada</h4>
                <p class="lead">La página que ha solicitado no se ha encontrado en el servidor. Por favor, póngase en contacto con su webmaster, o utilizar el botón Atrás en su navegador para navegar de vuelta a su página activa más reciente.</p>
                <ul class="list-inline">
                    <li>
                        <a class="btn btn-primary" href="/">Retornar al inicio</a>
                    </li>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->

    </div>
</div>
    <!-- /.page-content -->
    @overwrite