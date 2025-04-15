<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="description" content="Galería de imágnenes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&family=Rubik+Distressed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/galeria.css">
    <link rel="stylesheet" href="../css/nav-button.css"></link>    
    <link rel="stylesheet" href="../css/obras.css">
    <link rel="stylesheet" href="../css/barra-celular-principal.css"></link>    
        <!-- ////favicon////////////////////// -->
        <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
    <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Galería de Imágenes</title>
  </head>
  <body>

  <div id="preloder">
  <img id="img-loder" src="../video/loder.webp" alt="en unos segundos..." height="150px" width="150px">
  </div>

  <!-- ///COMPONENTES REQUERIDOS PHP/////////////////////////////////////////////////////// -->
    <?php require '../components/items-nav-bar.php'?>
    <?php require '../components/error-report.php'?>
    <?php require '../../storagedir/bd.php';?>
    
  <!-- ////////BARRA DE NAVEGACIÓN///////////////////////////////////////////////////////// -->
 
  <?php muestraBarra('obras') ?>

  <!-- ////////ENCABEZADO//////////////////////////////////////////////////////////////// -->

    <section class="header header-2">

      <div class="portada-territorios">
        <h1 class="titulo-territorios">TERRITORIOS</h1>
      </div>

    </section>

<section>
<a href="../index.php#territorios-galeria">
  <div  class="pasa-obra-anterior boton-cerrar-seccion">
<?php require '../botones/botonAtrasGaleria.php' ?>
</div> </a>
</section>
  <!-- ///GALERIA/////////////////////////////////////////////////////////////////////////////// -->
  <!-- La galería es un grid responsivo que se completa con la función muestraGaleria, la cual renderiza cada imagen tomando la información la base de datos. Los estilos están en galeria.css y la función muestraGaleria en base-de-datos.php   -->
   <section>
  <div class="galeria">

    <div id="0" class="div-foto">
      <p class="placa-galeria"> Los maestros Roberto Escobar e Igón Lerchundi nos brindaron su espacio para realizar funciones de nuestras obras.
      </p>
    </div>

      <?php muestraGaleria('1', 'galeriasCombinadas', 'escobar lerchundi')?>
      
    <div id="6" class="div-foto">
      <p class="placa-galeria"> Grabación de poemas de Darío Semino en FM - La Tribu.
      </p>
    </div>

    <?php muestraGaleria('7', 'galeriasCombinadas', 'grabacion')?>

    <div id="18" class="div-foto">
      <p class="placa-galeria"> Presentación del libro Música de Oficinas en la librería Fedro de San Telmo.
      </p>
    </div>

  <?php muestraGaleria('19', 'galeriasCombinadas', 'presentacion libro')?>

    <div id="27" class="div-foto">
      <p class="placa-galeria"> Muestra de Fotos de Agostina Centurión de Música de Oficinas en Centro Cultural Recoleta.
      </p>
    </div>

    <?php muestraGaleria('28', 'galeriasCombinadas', 'recoleta')?>

    <div id="35" class="div-foto">
      <p class="placa-galeria"> Performance Museo de Poemas en Centro Cultural Todesca, Centro Cultural Pachamama, Hospital Moyano.
      </p>
    </div>

    <?php muestraGaleria('36', 'galeriasCombinadas', 'museo')?>

    <div id="52" class="div-foto">
      <p class="placa-galeria"> Performances "Libación a los dioses" en Librería la Libre y "¿Qué es pensar?" en Centro Cultural Pachamama.
      </p>
    </div>

    <?php muestraGaleria('53', 'galeriasCombinadas', 'otras perfos')?>

    </div>

  <div class="botones-fotos">
  <?php require '../botones/botones-fotos.php' ?>
    </div>
    </section>
<!-- ////////SCRIPTS//////////////////////////////////////////////////////////// -->
<script type="text/javascript" src="../js/nav-bar.js"></script>
<script type="text/javascript" src="../js/galeria.js"></script>
<script type="text/javascript" src="../js/boton-atras.js"></script>
<script type="text/javascript" src="../js/preloder.js"></script>

  </body>
</html>
