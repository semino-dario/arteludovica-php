<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta name="description" content="Las tejedoras">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/criticas.css">
   <!-- <link rel="stylesheet" href="../css/galeria.css">-->
    <link rel="stylesheet" href="../css/nav-button.css"></link>    
    <link rel="stylesheet" href="../css/obras.css">
    <link rel="stylesheet" href="../css/tejedoras.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Dancing+Script:wght@700&family=EB+Garamond&display=swap" rel="stylesheet">
        <!-- ////favicon////////////////////// -->
        <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
    <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Las tejedoras</title>
  </head>
  <body>

  <!-- ///PRELODER//////////////////////////////////////////////////////////////// -->

<div id="preloder">
  <img id="img-loder" src="../video/loder.webp" alt="en unos segundos..." height="150px" width="150px">
  </div>


  <!-- ///COMPONENTES REQUERIDOS PHP////////////////////////////////////////////////////////// -->
 
  <?php require '../components/items-nav-bar.php'?>
  <?php require '../botones/boton-pasa-obra.php'?>
  <?php require '../../storagedir/bd.php';?>
  <?php require '../components/error-report.php'?>

  <!-- ///BARRA DE NAVEGACIÓN//////////////////////////////////////////////////// -->

  <?php muestraBarra('obras') ?>

  <!-- ///MENÚ PRINCIPAL/////////////////////////////////////////////////////////////////// -->

<section id=portada class="header">
  <h1 id="titulo-principal-tejedoras" class="boton-cierra-seccion">Las tejedoras</h1>

  <div class="etiquetas">
  <div class="etiquetas-1">
  <span class="etiqueta etiqueta-historia etiqueta-celular" id="0">HISTORIA</span>
  <span class="etiqueta etiqueta-elenco etiqueta-celular" id="1" >ELENCO</span>
</div>

<div class="etiquetas-2">
  <span class="etiqueta etiqueta-celular" id="2">CRÍTICAS</span>
  <span class="etiqueta etiqueta-celular"> <a class="link-galeria" href="../galerias/galeria-tejedoras.php"> GALERÍA </a></span>
</div>
  </div>

</section>

<div class="galeria-pantalla-grande">

  <!-- ///PORTADA DE LA SECCIÓN MONITOR////////////////////////////////////////////////// -->
<section id="galeria-principal">
<div class="principal-tejedoras">
  <img id="luisina-fantasma" class="lazy" data-src="../imagenes/imagenes-tejedoras/luisina-fantasma.png" width="100px" height="180px"alt="">
  <img id="imagen-diego-pistola" class="lazy" data-src="../imagenes/imagenes-tejedoras/diego-pistola.png" width="200px" height="170px"alt="">
  <img id="imagen-tejedoras" class="lazy" data-src="../imagenes/imagenes-tejedoras/tejedoras-15.jpg" alt="Las tejedoras" width="650px" height="50%" >
</div>

</section>

</div>
  <!-- ///PORTADA DE LA SECCIÓN CELULAR////////////////////////////////// -->

<div id="galeria-principal-celular">
<section id="galeria-celular">
  <div class="principal-celular">
  <img id="cara-fantasma" class="lazy" data-src="../imagenes/imagenes-tejedoras/cara-fantasma.png" alt="fantasma">
  <img id="nadia-tejiendo" class="lazy" data-src="../imagenes/imagenes-tejedoras/tejedoras-17.jpg" alt="tejedora">
  </div>
</section>
</div>
<?php pasaObras('musicadeoficinas.php', 'banquete.php') ?>
<?php atrasBoton() ?>
<?php botonCierraObras() ?>

<section>
<?php barraBotonesCelular('musicadeoficinas.php', 'banquete.php' ) ?>
</section>
  <!-- ///HISTORIA//////////////////////////////////////////////////////////////// -->

<section class="secciones-desplegadas">

  <div class="historia-tejedoras flex-celular">
<div >
  <img class="imagen-historia-tejedoras lazy" data-src="../imagenes/imagenes-tejedoras/viqui-mirando.jpg" alt="historia de las tejedoras"  >
</div>

<div class="texto-historia-tejedoras ">
  <p>Isaura y Angélica son dos hermanas que pasan su tiempo tejiendo y charlando en una casona de Floresta. Pero sus vidas no son nada tranquilas, el peligro de ser víctimas de un crimen, la paranoia, la amnesia y los ecos de un pasado oscuro se enredan en sus días y sus noches. Las paredes de la casa encierran secretos y desgracias antiguas. Entre agujas y conversaciones triviales se desteje un destino y se teje una desgracia.</p>
  <div class="imagen-ovillo1">
    <img id="ovillo7"  src="../imagenes/imagenes-tejedoras/ovillos/ovillo7.png" height="90px" width="90px" alt="">
    <?php require '../svg/hilo-amarillo.php'?>
  </div>
</div>


</div>

<div class="funciones-tejedoras">

  <div class="texto-funciones-tejedoras ">
    <h3>Funciones:</h3> <br>
    <ul><li>Se realizaron funciones el 11 de junio y el 06 de agosto del 2011 en La Libre – Arte y Libros (espacio cultural, librería y galería de arte). </li>
    <li>La obra se presentó en la Casa Ludovica, Moreto 561, Ciudad Autónoma de Buenos Aires, los sábados de septiembre a noviembre del año 2009. El espacio utilizado es una vieja casa del barrio de Floresta que se adaptó para la realización de la puesta en el ámbito natural de los personajes de la obra. La obra se repuso en el mismo espacio en septiembre del 2010. </li>
    <li>“Las tejedoras” se estrenó en junio de 2009 en Mimoteatro Escobar Lerchundi, Defensa 611, Ciudad Autónoma de Buenos Aires, estando en cartel los meses de junio y julio. </li> </ul>
  </div>
  <div>

  </div>
</div>
</section>
  <!-- ///ELENCO//////////////////////////////////////////////////////////////// -->

<section class="secciones-desplegadas">
  <div class="contenedor-elenco flex-celular">
    <div class="">
      <img class="imagen-elenco lazy" data-src="../imagenes/imagenes-tejedoras/elenco-tejedoras.jpg" alt="elenco de las tejedoras">
    </div>
    <div class="texto-historia-tejedoras">
      <p id="texto-elenco-tejedoras">Autor: Darío Semino <br>
        Dirección: María Fernanda Catullo <br>
        Isaura: Nadia Cantó <br>
        Angélica: Estefanía Revas <br>
        Adivina: Luisina Lorenzo // María Fernanda Catullo <br>
        Coro de Ilusiones-Fantasmas-Recuerdos: <br> Nicolás Gallo, Luisina Lorenzo, Victoria Montanaro, Diego Semino <br>
        Diseño sonoro: Diego Montanaro <br>
        Fotografía y Diseño Gráfico: Agostina Centurión <br>
        Asistente de producción: Matías Palumbo <br>
        Prensa: Laura Castillo <br>
      </p>
      <div class="imagen-ovillo1">
        <img id="ovillo8" class="girar2" src="../imagenes/imagenes-tejedoras/ovillos/ovillo8.png" height="100px" width="100px" alt="">
        <?php require '../svg/hilo-verde.php' ?>
      </div>
  </div>
    </div>
  </div>
</section>

 <!-- ///CRÍTICAS//////////////////////////////////////////////////////////////// -->

<section class="secciones-desplegadas">
  <div class="contenedor-criticas">
<!-- ////Extractos de las críticas ///////////////////////////////////////////// -->
<div class="div-criticas">
<?php criticaExtracto('tejedoras') ?>
<?php require '../botones/botones-pasa-criticas.php' ?>
</div>
</div>

<!-- ////Críticas completas //////////////////////////////////////// -->
<div class="criticas-completas">
<?php require '../botones/boton-cierra-critica.php'?> <br>
<?php criticaCompleta('tejedoras') ?>
  </div>

</section>



<!-- ///SCRIPTS ////////////////////////////////////////////////////////////////// -->
  <script type="text/javascript" src="../js/preloder.js"></script>
  <script type="text/javascript" src="../js/tejedoras.js"></script>
  <script type="text/javascript" src="../js/nav-bar.js"></script>
  <script type="text/javascript" src="../js/obras.js"></script>
  <script type="text/javascript" src="../js/slide.js"> </script>
  </body>
</html>
