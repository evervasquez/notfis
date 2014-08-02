<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>BSCUNSM</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('assets/css/bootstrap.min.css'); }}

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/login.css'); }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {{ HTML::script('assets/js/html5shiv.js'); }}
    {{ HTML::script('assets/js/respond.min.js'); }}
    <![endif]-->
    
  </head>

  <body>

    <div class="container">

        @section('content')
      <form class="form-signin" method="post" action="login" >
        <h2 class="form-signin-heading">Iniciar sesión</h2>
        <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
        <input type="password" name="clave" class="form-control" placeholder="Contraseña" required>
        <label class="checkbox">
          <input type="checkbox" checked name="remember" id="remember"> Recuérdame
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>
      </form>
        @show
    </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>