<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Aprendiendo html"/>
    <title>Puls2014: haciendo una app muy buena</title>
    {{ HTML::style('assets/css/normalize.css'); }}
    {{ HTML::style('assets/css/estilos.css'); }}

</head>
<body>
<header>
    <figure id="logo">
        <img src="assets/img/logo.png"/>
    </figure>
    <h1>
        puls: Comunidad de personas atractivas
    </h1>
    <figure id="avatar">
        <img src="assets/img/avatar.jpg"/>
    </figure>
</header>
<nav>
    <ul>
        <li><a href="#">Python</a></li>
        <li><a href="#">HTML5</a></li>
        <li><a href="#">Javascript</a></li>
        <li><a href="#">CSS3</a></li>
        <li><a href="#">Django</a></li>
        <li id="publicar_nav">
            <a href="#">Publicar</a>
        </li>
    </ul>
</nav>
<section id="contenido">
    <article class="item">
        <figure class="image_item">
            <img src="assets/img/imagen.jpg"/>
        </figure>
        <h2 class="titulo_item">
            <a href="#">Título del articulo</a>
        </h2>

        <div class="autor_item">
            <a href="#">por Joana Muñoz</a>
        </div>
        <div class="datos_item">
            <a href="#" class="tag_item">pony</a>
            <span class="fecha_item">
                Hace <strong>5</strong> min
            </span>
        </div>
        <div class="votacion">
            <a href="#" class="up">69</a>
            720
            <a href="#" class="down"></a>
            <a href="#" class="comentarios_item">69</a>
            <a href="#" class="guardar_item"></a>
        </div>
    </article>
</section>
<footer>
    <p>
        <strong>Powerd by Pony</strong>
    </p>
    <p>
        sonico 2014
    </p>
</footer>
</body>
</html>