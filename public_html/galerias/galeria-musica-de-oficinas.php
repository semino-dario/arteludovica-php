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
    <title>Galería Música de Oficinas</title>
  </head>
<body>


  <!-- ///PRELODER//////////////////////////////////////////////////////////////// -->
  <div id="preloder">
  <img id="img-loder" src="../video/loder.webp" alt="en unos segundos..." height="150px" width="150px">
  </div>

<!-- //COMPONENTES REQUERIDOS DE PHP///////////////////////////////////////////////////-->
    
  <?php require '../../storagedir/bd.php';?>
  <?php require '../components/error-report.php'?>

<!-- //BOTON PARA CERRAR GALERÍA///////////////////////////////////////////////////-->
<a href="../html/musicadeoficinas.php">
  <div  class="pasa-obra-anterior boton-cerrar-seccion">
  <?php require '../botones/botonAtrasGaleria.php' ?>
</div> </a>


<!-- ///GALERÍA DE IMÁGENES //////////////////////////////////////////////////////////////////////////// -->

<section id="seccion-galeria-mdo" class="secciones-desplegadas">

  <div class="header">
    <!-- ///Video/////////////////////////////////////////////////////////////// -->

    <div class="contenedor-teatrailer">
      <div class="video-teatrailer">
        <div class="mascara-video">
        <iframe class="video" src="https://www.youtube.com/embed/O3X5y3q41cE" title="Video" 
                loading="lazy" 
                srcdoc="
                    <?php require '../components/css-mascara-video.php';?>
                    <a href='https://www.youtube.com/embed/O3X5y3q41cE?autoplay=1'>
                    <img  src='../imagenes/imagenes-mdo/mdo-funciones/mdo-funciones-20.jpeg' alt='Video'>
                    <?php require '../botones/boton-mascara-video.php';?>
                    </a>
                    "
                  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
          </div> <br>
          <h2>Video realizado por Guillermo Balbuena</h2>
        </div>
      </div>
    </div>

    <div class="header titulo-galeria">
  <p> - Fotografías - <br> Agostina Centurión
  </p>
</div>
  
  <!-- ///Galerías de fotos/////////////////////////////////////////////////////////////// -->
    <!-- La galería es un grid responsivo que se completa con la función muestraGaleria, la cual renderiza cada imagen tomando la información la base de datos. Los estilos están en galeria.css y la función muestraGaleria en base-de-datos.php   -->
    <div class="galeria">

<div id="0" class="div-foto">
      <p class="placa-galeria">Funciones en <br> <br>Liberarte <br> Mimotearo Escobar-Lerchundi <br>
      </p>
    </div>
    <?php muestraGaleria('1', 'galeriasCombinadas', 'mdo funciones')?>

    <div id="21" class="div-foto">
      <p class="placa-galeria">Detrás de escena <br> Mimoteatro Escobar - Lerchundi <br>
      </p>
    </div>
    <?php muestraGaleria('22', 'galeriasCombinadas', 'mdo detras escena')?>

</div>
  <div class="botones-fotos">
   <?php require '../botones/botones-fotos.php' ?>
  </div>
      
</section>
<script type="text/javascript" src="../js/preloder.js"></script>
<script type="text/javascript" src="../js/galeria.js"></script>
<script type="text/javascript" src="../js/boton-atras.js"></script>
</body>