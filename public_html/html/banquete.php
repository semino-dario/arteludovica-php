<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta name="description" content="El banquete de Platón">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=EB+Garamond&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/criticas.css">
    <link rel="stylesheet" href="../css/nav-button.css"></link>    
    <link rel="stylesheet" href="../css/obras.css">
    <link rel="stylesheet" href="../css/banquete.css">
       <!-- ////favicon////////////////////// -->
       <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
    <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>El Banquete de Platón</title>
  </head>
<body>

<!-- ///PRELODER//////////////////////////////////////////////////////////////// -->

<div id="preloder">
  <img id="img-loder" src="../video/loder.webp" alt="en unos segundos..." height="150px" width="150px">
  </div>

<!-- ///COMPONENTES REQUERIDOS PHP//////////////////////////////////////////////////////////////////////// -->

<?php require '../components/items-nav-bar.php'?>
<?php require '../components/galeria-giratoria.php' ?>
<?php require '../botones/boton-pasa-obra.php'?>
<?php require '../../storagedir/bd.php';?>
<?php require '../components/error-report.php'?>

<!-- ///BARRA DE NAVEGACIÓN//////////////////////////////////////////////////////////////////////////////// -->

<?php muestraBarra('obras') ?>

<!-- ////MENU PRINCIPAL///////////////////////////////////////////////////////////// -->

<section class="header">

<section class="encabezado">
  <h1>El Banquete de Platón</h1>
</section>

<!-- ////PORTADA DE LA SECCIÓN///////////////////////////////////////////////////////////// -->

<div class="barra-etiquetas">
  <p id="0"class="etiqueta">HISTORIA</p>
  <p id="1" class="etiqueta">ELENCO</p>
  <p id="2"class="etiqueta">COMENTARIOS</p>
  <p id="3"class="etiqueta"> <a class="link-galeria" href="../galerias/galeria-banquete.php"> GALERÍA </a></p>
</div>
</section>

<!-- ////GALERIA GIRATORIA//////////////////////////////////////////////////////////// -->
<!--La galería giratoria se renderiza mediante la función que está en components/galeria-giratoria.php-->
<section id="galeria-principal">
  <div class="gallery">
    <?php galeriaGiratoria() ?>
  </div>
  <div class="imagen-fija">
    <img class="lazy" id="nanu-fondo" data-src="../imagenes/imagenes-banquete/banquete-4.png"  alt="">
  </div>

</section>
<?php pasaObras('tejedoras.php', 'musicadeoficinas.php') ?>
<?php atrasBoton() ?>


<section>
<?php barraBotonesCelular('tejedoras.php', 'musicadeoficinas.php' ) ?>
<?php botonCierraObras() ?>
</section>
<!-- ////HISTORIA///////////////////////////////////////////////////////////// -->

<section id="seccion-historia" class="secciones-desplegadas">

  <div class="div-historia">

  <div class="texto-historia-banquete">
    <p>Celebrando el triunfo de Agatón en la máxima competencia poética de la Grecia ática se reúnen Sócrates, Fedro, Pausanias, Erixímaco, Aristófanes y otros y deciden dedicar el banquete a Eros.
      Uno a uno se suceden los discursos develándonos cada vez un aspecto
      nuevo e inesperado de este. ¿dios? Sorprendiéndonos, interpelándonos ¿quién es Eros? <br> <br>

      En esta puesta la danza, la música y el teatro confluyen para dar
      cuenta de la riqueza poética y filosófica de este diálogo e intenta acercar al espectador contemporáneo a un texto nuclear del
      pensamiento occidental.</p>
  </div>

  <div class="imagen-historia-banquete">
    <img class="imagen-seccion lazy" data-src="../imagenes/imagenes-banquete/banquete-7.png" width="45%" height="45%" alt="Escena del Banquete">
  </div>

  </div>
</section>

<!-- ////ELENCO///////////////////////////////////////////////////////////// -->

<section id= "seccion-elenco" class="secciones-desplegadas">
 
  <div class="div-elenco">

  <div class="imagen-elenco-banquete">
    <img data-src="../imagenes/imagenes-banquete/banquete-9.png" class="imagen-seccion lazy"  width="50%" height="50%" alt="Escena del Banquete">
  </div>

  <div class="texto-elenco-banquete">
    <p>Adaptación: María Fernanda Catullo <br>
      Actúan:  Nadia Cantó, Félix Coll, Leandro Crovetto, Eugenia Gimenez, Mailen Goldar, Betiana Grilanc, Daniel A. Liñares, Victoria Montanaro, Ariel Ragusa, Diego Semino, Rolo Sosiuk, Fedra Urquiza Viola <br>
      Vestuario: Fernanda Crovetto <br>
      Diseño de objetos: Paula Grilanc <br>
      Música: Rodolfo Arbe, Diego López <br>
      Fotografía: Agostina Centurión <br>
      Diseño gráfico: Agostina Centurión, Leandro Crovetto <br>
      Asistencia de dirección: Sol Heffesse <br>
      Dirección: María Fernanda Catullo</p>
  </div>
</div>
</section>

<!-- ////COMENTARIOS DEL PÚBLICO///////////////////////////////////////////////////////////// -->

<section id="seccion-criticas" class="secciones-desplegadas comentarios-banquete">
  
  <div class="contenedor-criticas">
    <div class="titulo-comentarios">

    <h1>Comentarios del público</h1> <br> 
    <p>Registrados durante las funciones de 2013 <br> Se pueden ver más comentarios en <a href="http://www.alternativateatral.com/opiniones27837-el-banquete-de-platon" target="_blank">Alterantiva Teatral</a>
    </p> <br><br>
    </div>
    
  <div class="div-criticas">
  <?php criticaExtracto('banquete')?>
   <?php require '../botones/botones-pasa-criticas.php' ?>
    </div>
  </div>

<div class="" id="boton-cierra-criticas">
  </div>
</section>


<!-- ////SCRIPTS///////////////////////////////////////////////////////////// -->
<script type="text/javascript" src="../js/preloder.js"></script>
<script type="text/javascript" src="../js/nav-bar.js"></script>
<script type="text/javascript" src="../js/obras.js"></script>
<script type="text/javascript" src="../js/slide.js"></script>
<script type="text/javascript" src="../js/banquete.js"></script>
</body>
