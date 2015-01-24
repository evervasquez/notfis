<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
</head>
<body>
<div class="row">
    <div class="container">
        <hr/>
        <div class="col-md-3 col-lg-3">
        </div>
        <div class="col-lg-6">
            {{ Form::open(array('route' => 'postnoticia','id' => 'formulario','role'=>'form','class'=>'form-horizontal mt10','method'=>'POST','files' => true)) }}
                <div class="form-group">
                    <label for="ejemplo_email_1">Título</label>
                    <input type="text" class="form-control" autofocus id="titulo" name="titulo"
                           placeholder="Introduce Título" required>
                    <input type="hidden" name="regId" value="{{$datos[0]->gcm_regid}}"/>
                </div>

                <div class="form-group">
                    <label for="categoria_id">Categoria</label>
                    <select required="required"  class="form-control" name="categoria_id" id="categoria_id" >
                        <option value="">Seleccione...</option>
                        <option value="1">Evento</option>
                        <option value="2">Curso</option>
                        <option value="3">Taller</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ejemplo_archivo_1">Adjuntar un Imagen</label>
                    {{ Form::file('imagen') }}
                </div>
                <div class="form-group">
                    <label for="ejemplo_archivo_1">Descripción de la noticia</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            {{ Form::close() }}
        </div>
        <div class="col-md-3 col-lg-3">

        </div>
    </div>
</div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>