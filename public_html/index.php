<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="description" content="Memorias de una experiencia teatral">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta charset="utf-8">
    <meta property="og:locale" content="es_ES" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Compañía Arteludovica" />
    <meta property="og:description" content="Memorias de una experiencia teatral" />
    <meta property="og:image" content="http://arteludovica.com.ar/imagenes/imagenes-principal/mimoteatro-puerta.jpeg"/>
    <meta property="og:image:secure_url" content="http://arteludovica.com.ar/imagenes/imagenes-principal/mimoteatro-puerta.jpeg"" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="350" />
    <meta property="og:image:alt" content="Integrantes de Arteludovica" />
    <meta property="og:url" content="http://arteludovica.com.ar/" />


    <link rel="stylesheet" href="css/estilos.css"></link>
    <link rel="stylesheet" href="css/nav-button.css"></link>    
    <link rel="stylesheet" href="css/barra-celular-principal.css"></link>    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&family=Rubik+Distressed&display=swap" rel="stylesheet">
     <!-- ////favicon////////////////////// -->
     <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Compañía Arteludovica</title>
  </head>

  <body>

  <!-- ////////COMPONENTES REQUERIDOS PHP//////////////////////////////////////// -->

  <?php require 'video/preloder.php'?>
  <?php require 'components/tarjetas-obras.php'?>
  <?php require 'components/error-report.php'?>
  <?php require 'botones/boton-pasa-obra.php'?>
  <?php require 'components/items-nav-bar.php'?>
  <?php require '../storagedir/bd.php';?>

  <!-- ////////BARRA DE NAVEGACIÓN////////////////////////////////////////////////////// -->
  
<?php muestraBarra('principal') ?>
 
  <!-- ////////PORTADA PRINCIPAL DEL SITIO////////////////////////////////////////////// -->

<section>

    <h1 id="titulo-principal">COMPAÑÍA ARTELUDOVICA</h1>
    <div class="subtitulo">
      <h2>MEMORIAS DE UNA EXPERIENCIA TEATRAL</h2>
    </div>
    <div class="seccion-textos imagen-portada">
      <div class="imagen-puerta-mimoteatro">
        <img src="imagenes/imagenes-principal/mimoteatro-puerta.jpeg" id="foto-ludovica" alt="La Compañía en la puerta de Mimoteatro Escobar-Lerchundi" height="600px" width="600px"><br>
    </div>
  </div>
    <div class="copete">
      <p >La Compañía Teatral Arteludovica estuvo activa entre 2006 y 2013 en Buenos Aires. Se puede seguir aquí el rastro de su trayectoria. </p>
    </div>
  
</section>

<section>
<?php barraBotonesCelular('tejedoras.php', 'musicadeoficinas.php' ) ?>
</section>
  <!-- ////////OBRAS////////////////////////////////////////////////////// -->

<section>

    <div class="textos-titulo">
      <h2 id="obras">Obras</h2>
    </div>
    <div class="texto" id="copete-obras">
    <p >Podés entrar en cada una para recorrerla.</p>
    </div>

    <div class="contenedor">
      <?php echo $tarjetasObras( "volante-musica-de-oficinas.jpeg", "Música de oficinas", "¿Querés trabajar en la Dirección de Organigrama?", "html/musicadeoficinas.php");?>
      <?php echo $tarjetasObras( "viqui-tejedora.jpeg", "Las tejedoras", "Una casa llena de sueños y fanstasmas", "html/tejedoras.php");?>
      <?php echo $tarjetasObras( "diego-banquete.jpeg", "El Banquete de Platón", "Pero... ¿quién es Eros?", "html/banquete.php");?>
    </div>
</section>

 <!-- ////////NÚSICA////////////////////////////////////////////-->

<section>

    <div class="contenedor">

  <!-- ////////Portada de la sección con imagen de disco y texto/////// -->

      <div class="seccion-musica">
        <div class="musica-contenido">
          <div class="titulo-y-texto">

          <div  class="textos-titulo">
         <h2 id="musica-odamil">Música</h2> <br>
       </div>
        <div class="texto">
          <p>Esta es la música orginal de nuestra primera obra. Es buenísima.  </p>
         <?php require 'botones/boton-musica.php'?>
        </div>
      </div>
        <div class="div-disco">
        <img src="imagenes/imagenes-principal/disco-musica2.png" class="imagen-disco" alt="disco de Odamil Yotsé">
       </div>

      </div>

  <!-- ////////Imagen que se abre para escuchar la música//////// -->

        <div class="div-musica">
          <div class="video-teatrailer">

          <div class="mascara-video"> 
          <iframe class="video" src="https://www.youtube.com/embed/qpXJE-NGDY0" title="Video" 
                loading="lazy" 
                srcdoc="
                    <?php require 'components/css-mascara-video.php';?>
                    <a href='https://www.youtube.com/embed/qpXJE-NGDY0?autoplay=1'>
                    <img  src='imagenes/imagenes-mdo/mdo-funciones/mdo-funciones-4.jpeg' style='width:100%' alt='Video'>
                    <?php require 'botones/boton-mascara-video.php';?>
                    </a>
                    "
                  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
          
        </div>
        <br>
        <div class="texto">
          El grupo Odamil Yotsé estuvo integrado por Julián Gil Ostapkiewicz, Adriel Corias Iacovino y Martín Braccone.
        </div>
          <br>
            </div>
            <?php require 'botones/boton-cierre.php' ?>
        </div>

      </div>

  </div>

  </section>

  <!-- ////////TEXTOS//////////////////////////////////////////////////////// -->

<section>

  <div class="contenedor">
      <div class="seccion-textos descarga-pdf"">
        <div class="texto">
          <div class="textos-titulo">
          <h2 id="textos-obras">Textos</h2> <br>
          </div>
          <p>Se pueden descargar en PDF los textos de las últimas dos obras estrenadas. </p>
        </div>
        <div class="textos-descarga">
          <span class="pdf"><h3>Las tejedoras</h3></span>
          <span class="pdf"><h3>El Banquete</h3></span>
       </div>
       <div class="div-boton-descarga">
       <button type="button" class="botones-descarga" id="boton-descarga" name="button">
        <?php require 'botones/boton-descarga-pdf.php';?>
       </button><br>

        <button type="button" class="botones-descarga" id="boton-cierra-descarga" name="button">
          <?php require 'botones/boton-cierre-descarga.php';?>
        </button>
      </div>
    </div>
  </div>

</section>

  <!-- ////////EQUIPO///////////////////////////////// -->

<section>
  <div class="contenedor-2">
    <div class="seccion-textos-2">
      <div class="texto">
          <div class="textos-titulo">
            <h2 id="territorios-galeria">Territorios</h2> <br>
          </div>
            <p> Lugares, personas y momentos que formaron nuestro viaje. </p>
          </div>
          </div>
          <div class="imagen-puerta-mimoteatro">
          <a href="html/galeria.php">
            <?php require 'components/carrusel-territorios.php' ?>
            </a>
            <a href="html/galeria.php">
            <?php require 'botones/boton-territorios.php' ?>
            </a>
      </div>
  </div>
</section>


  <!-- ////////EQUIPO///////////////////////////////// -->

<section>
<div class="contenedor-2" id="equipo">
    <div class="seccion-textos-2">
    <div class="texto">
      <div class="textos-titulo">
      <h2 id="equipo">EQUIPO</h2> <br>
      </div>
      <p> Click en la foto para saber quién es quién... </p>
    </div>
    </div>
    <div class="contenedor-equipo">
      <?php require 'components/foto-equipo.php' ?>      
     <br>
     <div class="texto" ><p class="texto-agostina" > Detrás de cámara Agostina Centurión  <a target="_blank" href="https://www.agostinacenturion.com.ar"><button class="boton-integrante">ver más</button></a></p> <br></div>
     <br>
    <div class="tarjeta-equipo" >
  <?php require 'components/tarjeta-equipo.php' ?>
</div>
</div>
</div>



</section>

  <!-- ////////COLOFÓN///////////////////////////////// -->

<section>
    <div class="contenedor">

      <div class="seccion-textos">
            <div class="texto colofon">
          <div class="textos-titulo">
        <h2 id="colofon">Colofón </h2> <br>
      </div> 
        <div class="texto-colofon">
          <p id="text1"> </p><br><br>
           <p class="info-contacto">
            <a class="link" target="_blank" href="http://arteludovica.blogspot.com/">Viejo blog - Compañía Arteludovica</a> <br> <br>
            Sitio desarrollado por <a class="link" href="https://www.linkedin.com/in/dar%C3%ADo-semino-96a88920b/" target="_blank" href="">Darío Semino</a>
          </p>

        </div>
        </div>
      </div>
    </div>
</section>

  <!-- ////////SCRIPTS///////////////////////// -->
   
    <script type="text/javascript" src="js/nav-bar.js"></script>
    <script type="text/javascript" src="js/arteludovica.js"></script>
    <script type="text/javascript" src="js/preloder.js"></script>

  </body>

</html>
