<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="description" content="Galería de imágenes">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allerta+Stencil&family=Rubik+Distressed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/galeria.css">
    <link rel="stylesheet" href="../css/obras.css">
    <link rel="stylesheet" href="../css/barra-celular-principal.css"></link>    
    <title>Galería Banquete</title>
  </head>
<body>
    
  <!-- ///PRELODER//////////////////////////////////////////////////////////////// -->
  <div id="preloder">
  <img id="img-loder" src="../video/loder.webp" alt="en unos segundos..." height="150px" width="150px">
  </div>

<!-- //COMPONENTES REQUERIDOS DE PHP//////////////////////////////////////////////////////////////// -->
<?php require '../components/error-report.php'?>
<?php require '../../storagedir/bd.php';?>


<!-- //BOTON PARA CERRAR GALERÍA///////////////////////////////////////////////////-->
<a href="../html/banquete.php">
  <div  class="pasa-obra-anterior boton-cerrar-seccion">
  <?php require '../botones/botonAtrasGaleria.php' ?>
</div> </a>

<!-- ////GALERÍA DE IMÁGENES///////////////////////////////////////////////////////////// -->
 <!-- La galería es un grid responsivo que se completa con la función muestraGaleria, la cual renderiza cada imagen tomando la información la base de datos. Los estilos están en galeria.css y la función muestraGaleria en base-de-datos.php   -->
 <section class="galeria-banquete secciones-desplegadas">

<div class="header titulo-galeria">
  <p> - Fotografías - <br> Agostina Centurión
  </p>
</div>

<!-- ////Galería de funciones///////////////////////////////////////////////////////////// -->
  <div class="galeria">
    <div id="0" class="div-foto">
      <p class="placa-galeria">Funciones en: <br> -Espacio G104 <br> -La Libre
      </p>
    </div>
    <?php muestraGaleria('1', 'galeriasCombinadas', 'banquete funciones')?>
<!-- ////Galería de ensayos///////////////////////////////////////////////////////////// -->
    <div id="20" class="div-foto ">
      <p class="placa-galeria">Ensayos en: <br>-Centro Cultural Pachamama</p>
    </div>
    <?php muestraGaleria('21', 'galeriasCombinadas', 'banquete ensayos')?>
    </div>
  <div class="botones-fotos">
    <?php require '../botones/botones-fotos.php' ?>
  </div>
  
</section>
<script type="text/javascript" src="../js/preloder.js"></script>
<script type="text/javascript" src="../js/galeria.js"></script>
<script type="text/javascript" src="../js/boton-atras.js"></script>
</body>