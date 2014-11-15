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
   <meta name="viewport" content="width-device-width, initial-scale=1.0"> 
    {{ HTML::style('assets/css/main.css'); }}
    {{ HTML::style('assets/css/normalize.css'); }}
    <script type="application/javascript">
        var base_url = '/';
    </script>
</head>
<body>
    <nav class="MainMenu">
            <ul class="MainMenu-item">      
                <li class="MainMenu-list">
                    <a class="MainMenu-link icon-home u-home" href="" ><br>
                        <span class="MainMenu-linkName">
                        home
                    </span>
                    </a>
                            
                </li>
                
                <li class="MainMenu-list">
                    <a class="MainMenu-link  icon-tools u-talleres" href=""><br>
                        <span class="MainMenu-linkName">
                        talleres
                    </span>
                    </a>
                    
                </li>
                
                <li class="MainMenu-list">
                    <a class="MainMenu-link icon-cursos  u-curso" href=""><br>
                        <span class="MainMenu-linkName">
                        Cursos
                    </span>
                    </a>
                    
                </li>
            
                <li class="MainMenu-list">
                    <a class="MainMenu-link  icon-galery u-galeria" href=""><br>
                        <span class="MainMenu-linkName">
                        galería
                    </span>
                    </a>
                
                </li>
            </ul>
    </nav>
    <div class="ContainerGeneral">
        <header class="Header">
            <figure class="Header-containerImage">
              {{ HTML::image('assets/img/logo.png','',array('class' => 'Header-image')) }}    
            </figure>
            <h1 class="Header-title">NotFis</h1>

        </header>

        <section class="NoticiaPrincipal">
                <article class="NoticiaPrincipal-container">
                     <figure class="NoticiaPrincipal-imageContainer">
                        <a class="NoticiaPrincipal-link" href="">
                             {{ HTML::image('assets/img/p1.jpg','',array('class' => 'NoticiaPrincipal-image')) }}   
                            <figcaption class="NoticiaPrincipal-title">Nueva app Notfis para la fisi</figcaption>
                        </a>
                    </figure>
                                          
                        <a class="NoticiaPrincipal-category" href="">Eventos</a><span class="NoticiaPrincipal-date">Hoy</span>
                        <p class="NoticiaPrincipal-subtitle">Nueva applicacion de notificaciones android para los alumnos de la facultad de ingenieria de sistemas e informatica
                            
                         </p>
                       
                </article>
                <article class="NoticiaPrincipal-container">
                    <figure class="NoticiaPrincipal-imageContainer">
                       <a class="NoticiaPrincipal-link" href="">
                             {{ HTML::image('assets/img/p3.jpg','',array('class' => 'NoticiaPrincipal-image')) }}   
                            <figcaption class="NoticiaPrincipal-title">Curso de Diseño centrado en el usuario - importancia y porque en la actualidad es de suma importancia</figcaption>
                        </a>
                    
                    </figure>
                  
                        <a class="NoticiaPrincipal-category" href="">Curso</a><span class="NoticiaPrincipal-date">27/10/14</span>
                        <p class="NoticiaPrincipal-subtitle">Nueva applicacion de notificaciones android para 
                            los alumnos de la facultad de ingenieria de sistemas e informatica
            
                         </p>
                    </article>

        </section>

        <section class="NoticiaSegundo">
            <artitle class="NoticiaSegundo-container">
                <a href="" class="NoticiaSegundo-linkNoticia">
                        <figure class="NoticiaSegundo-imageContainer">
                            
                              {{ HTML::image('assets/img/fisi1.jpg','',array('class' => 'NoticiaSegundo-image')) }}   
                            <figcaption class="NoticiaSegundo-title">Talibanes pierden</figcaption>
                        </figure>
                        <a class="NoticiaSegundo-categoria" href="#">Evento</a>
                        <span class="NoticiaSegundo-date">27/08/2014</span>
                    </a></artitle>
                <artitle class="NoticiaSegundo-container"><a href="" class="NoticiaSegundo-linkNoticia">
                        <figure class="NoticiaSegundo-imageContainer">
                            
                              {{ HTML::image('assets/img/fisi2.jpg','',array('class' => 'NoticiaSegundo-image')) }}   
                            <figcaption class="NoticiaSegundo-title">Talibanes pierden</figcaption>
                        </figure>
                        <a class="NoticiaSegundo-categoria" href="#">Evento</a>
                        <span class="NoticiaSegundo-date">27/08/2014</span>
                    </a></artitle>
                <artitle class="NoticiaSegundo-container"><a href="" class="NoticiaSegundo-linkNoticia">
                        <figure class="NoticiaSegundo-imageContainer">
                            
                              {{ HTML::image('assets/img/fisi2.jpg','',array('class' => 'NoticiaSegundo-image')) }}   
                            <figcaption class="NoticiaSegundo-title">Nueva applicacion de notificaciones android para los alumnos de la facultad de ingenieria de sistemas e informatica</figcaption>
                        </figure>
                        <a class="NoticiaSegundo-categoria" href="#">Evento</a>
                        <span class="NoticiaSegundo-date">27/08/2014</span>
                    </a></artitle>
                <artitle class="NoticiaSegundo-container"><a href="" class="NoticiaSegundo-linkNoticia">
                        <figure class="NoticiaSegundo-imageContainer">
                            
                              {{ HTML::image('assets/img/fisi3.jpg','',array('class' => 'NoticiaSegundo-image')) }}   
                            <figcaption class="NoticiaSegundo-title">Talibanes pierden</figcaption>
                        </figure>
                        <a class="NoticiaSegundo-categoria" href="#">Evento</a>
                        <span class="NoticiaSegundo-date">27/08/2014</span>
                    </a></artitle>    
        </section>

        <section class="NoticiaTercera">
            <article class="NoticiaTercera-container">
                <figure class="NoticiaTercera-containerImage">
                    {{ HTML::image('assets/img/fisi3.jpg','',array('class' => 'NoticiaTercera-image')) }} 
                </figure>
                <p class="NoticiaTercera-title">Título de la noticias</p>
                <a href="" class="NoticiaTercera-categoria">Evento</a>
                <spam class="NoticiaTercera-date">25/10/2014</spam>
            </article>
            <article class="NoticiaTercera-container">
                <figure class="NoticiaTercera-containerImage">
                    {{ HTML::image('assets/img/fisi3.jpg','',array('class' => 'NoticiaTercera-image')) }} 
                </figure>
                <p class="NoticiaTercera-title">Título de la noticias</p>
                <a href="" class="NoticiaTercera-categoria">Evento</a>
                <spam class="NoticiaTercera-date">25/10/2014</spam>
            </article>
            <article class="NoticiaTercera-container">
                <figure class="NoticiaTercera-containerImage">
                    {{ HTML::image('assets/img/fisi3.jpg','',array('class' => 'NoticiaTercera-image')) }} 
                </figure>
                <p class="NoticiaTercera-title">Título de la noticias</p>
                <a href="" class="NoticiaTercera-categoria">Evento</a>
                <spam class="NoticiaTercera-date">25/10/2014</spam>
            </article>
            <article class="NoticiaTercera-container">
                <figure class="NoticiaTercera-containerImage">
                    {{ HTML::image('assets/img/fisi3.jpg','',array('class' => 'NoticiaTercera-image')) }} 
                </figure>
                <p class="NoticiaTercera-title">Título de la noticias</p>
                <a href="" class="NoticiaTercera-categoria">Evento</a>
                <spam class="NoticiaTercera-date">25/10/2014</spam>
            </article>
            <article class="NoticiaTercera-container">
                <figure class="NoticiaTercera-containerImage">
                    {{ HTML::image('assets/img/fisi3.jpg','',array('class' => 'NoticiaTercera-image')) }} 
                </figure>
                <p class="NoticiaTercera-title">Título de la noticias</p>
                <a href="" class="NoticiaTercera-categoria">Evento</a>
                <spam class="NoticiaTercera-date">25/10/2014</spam>
            </article>
            
        </section>
    </div>


{{ HTML::script('assets/js/jquery.min.js') }}
{{ HTML::script('assets/js/bootstrap.min.js') }}
{{ HTML::script('assets/js/bootstrap-hover-dropdown.min.js') }}
</body>
</html>
