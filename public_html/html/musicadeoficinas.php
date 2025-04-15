<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta name="description" content="Música de oficinas">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/criticas.css">
    <!--<link rel="stylesheet" href="../css/galeria.css">-->
    <link rel="stylesheet" href="../css/nav-button.css"></link>    
    <link rel="stylesheet" href="../css/obras.css">
    <link rel="stylesheet" href="../css/estilos-musica-de-oficinas.css">
        <!-- ////favicon////////////////////// -->
        <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/site.webmanifest">
    <link rel="mask-icon" href="../favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Música de Oficinas</title>
  </head>
  <body>
  <!-- ///PRELODER//////////////////////////////////////////////////////////////// -->
  <div id="preloder">
  <img id="img-loder" src="../video/loder.webp" alt="en unos segundos..." height="150px" width="150px">
  </div>

  <!-- ///COMPONENTES REQUERIDOS PHP//////////////////////////////////////////////////////////////////////// -->
 
  <?php require '../components/items-nav-bar.php'?>
  <?php require '../botones/boton-pasa-obra.php'?>
  <?php require '../../storagedir/bd.php';?>
  <?php require '../components/error-report.php'?>

  <!-- ///BARRA DE NAVEGACIÓN//////////////////////////////////////////////////////////////////////////////// -->
  
  <?php muestraBarra('obras') ?>


<!-- ////MENU PRINCIPAL PARA MONITOR///////////////////////////////////////////////////////////// -->

<section class="galeria-pantalla-grande">
  <section class="header" id="portada-organigrama">
    <?php require '../svg/mdo-menu-monitor.php'?>
  </section>


<!-- //DIBUJO DE ORGANIGRAMA PARA MONITOR//////////////////////////////////////////////////////// -->
 
<section >
    <div id="galeria-principal" class="">
      <?php require '../svg/mdo-organigrama-monitor.php'?>
    </div>
    </section>
</section>

<!-- ///MENÚ PRINCIPAL PARA CELULAR/////////////////////////////////////////////////////////////////// -->

<section  id="celular" >
  <div class="header" id="portada-pantalla-celular">
    <?php require '../svg/mdo-menu-celular.php'?>
  </div>
  
<!-- ///DIBUJO DE ORGANIGRAMA PARA CELULAR//////////////////////////////////////////////////////////// -->
    <div class="vector galeria-celular" id="galeria-principal-celular">
      <div class="header">
      <?php require '../svg/mdo-organigrama-celular.php'?>
    </div>
    </div>

</section>
<?php pasaObras('banquete.php', 'tejedoras.php') ?>
<?php atrasBoton() ?>
<?php botonCierraObras() ?>
<section>
<?php barraBotonesCelular('banquete.php', 'tejedoras.php' ) ?>
</section>
<!-- ///HISTORIA////////////////////////////////////////////////////////////////////////////////////// -->

<section class="secciones-desplegadas">
  <div class="historia-mdo">
  <p>Una joven ingresa a trabajar en la Dirección de Organigrama, un lugar caótico y plagado de conflictos.
    Allí deberá pasar por duras y extrañas pruebas que la llevarán a descubrir que ella es un objeto más al que se desea controlar.
    Una mirada corrosiva sobre las instituciones, el poder y la libertad.</p> 
  </div>
  <div class="contenedor-historia">

    <div class="funciones-mdo">

<h3>Funciones:</h3> <br>
<p> <strong> Música de Oficinas </strong> se estrenó en enero de 2007 en el sala de teatro de Liberarte, Av. Corrientes 1555, Ciudad de Buenos Aires. Ese año estuvo en cartel hasta el mes de junio. En 2008 la obra estuvo en cartel en la Sala Mimoteatro-Escobar Lerchundi, Defensa 611, Ciudad de Buenos Aires los meses de abril y mayo. En 2009 volvió a estar en cartel en el mes de marzo en la misma sala. <br> <br>
  
También se realizaron funciones especiales de la obra, según se detalla a continuación: <br> <br>
<ul>
<li>
Diciembre de 2009,  función especial para la Sociedad  Iberoamericana de Gerontología en la Defensoría del Pueblo de la Ciudad Autónoma de Buenos Aires. </li> <br>
<li> Marzo de 2009, función en el espacio Summum Bar Cutural, en Hipólito Yrigoyen 3666,  Lanús, Provincia de Buenos Aires. </li><br>
<li> Agosto de 2007, función especial para participantes del Congreso Internacional Gerontovida “Compromiso por la Vida”, organizado por la Defensoría de la Tercera Edad de la CABA y la Sociedad Iberoamericana de Gerontología. Teatro Liberarte.</li> <br>
<li> Octubre de 2006, Teatro Colonial, Ciudad Autónoma de Buenos Aires. Función experimental (ensayo abierto).</li>
</ul>
  </p>
</div>
  <div>
    <img class="imagen-historia-1"  src="../imagenes/imagenes-mdo/mdo-fer-leyendo.png" width="375px" height="400px" alt="escena de música de oficnas">

  </div>
  </div>

  <div class="contenedor-historia-2">
    <div>
      <img class="imagen-historia-2" src="../imagenes/imagenes-mdo/nanu-tefi.png" alt="">
    </div>
    <div class="funciones-mdo">
      <h3>Otras actividades relacionadas con la obra:</h3>
      <P> <br> <br>
      <ul>
      <li><strong>  Edición de Música de Oficinas (libro + CD con la música de la obra) </strong> <br>
        Presentación del libro y el CD en la librería Fedro Espacio de Arte, Carlos Calvo 578, el 10 de noviembre de 2007. En el evento se realizó una primera exposición de la muestra fotográfica itinerante “Música de Oficinas. Ojos Mirando”. También se llevó a cabo una intervención teatral a cargo de integrantes de la compañía y finalmente se cerró el evento con un recital de Odamil Yotsé. </li><br> <br>

     <li> <strong>  Participación del Festival de videoarte organizado por Canal (á) </strong> <br>
        La obra realizada por Adriel Corias Iacovino, titulada “Cueva de Ingrid 1”, inspirada en uno de los temas del mismo nombre incluido en el CD de Odamil Yotsé, se ha encontrado entre los videos más vistos del festival “Arte en Video (toma 2)” organizado por Canal (à). </li> <br> <br>

     <li> <strong> Muestra Fotográfica Itinerante. Música de Oficinas. </strong> <br>
        La muestra se inauguró el día de 10 de noviembre de 2007 en el evento de presentación del libro-CD "Música de Oficinas" en Fedro Espacio de Arte. Participó en la 6ta, 7ma y 8va Feria del Libro Independiente y (A). Pudo visitarse durante los meses de marzo y abril de 2008 en Liberarte Bodega Cultural. Ese mismo año una selección de fotos de Agostina Centurión participó de la muestra “Recoleta Comparte. Arte Joven sin Selección” en la sala  9 del Centro Cultural Recoleta del 11 al 27 de julio.</li>
      </ul>
      </P>
    </div>
  </div>
  </section>


</section>

<!-- ////ELENCO////////////////////////////////////////////////////////////////////////////////////// -->


<section class="secciones-desplegadas">

<div class="contenedor-elenco">

<?php require '../svg/mdo-elenco.php'?>

<?php require '../svg/mdo-elenco-celular.php'?>


  <div class="foto-1">
    <img class="foto-nanu"src="../imagenes/imagenes-mdo/nanu-de-pie-2.png" height="70%" width="70%" alt="ingresante">
  </div>

</div>
</section>

<!-- ////CRÍTICAS////////////////////////////////////////////////////////////////////////////////////// -->

<section class="secciones-desplegadas" >

<div class="contenedor-criticas">

<!-- ////Extracto de críticas //////////////////////////////////////////////////////////////////// -->

<div class="div-criticas">
   <?php criticaExtracto('mdo')?>
   <?php require '../botones/botones-pasa-criticas.php' ?>
</div>
</div>
<!-- ////Críticas completas ///////////////////////////////////////////////////////////////////////// -->

<div class="criticas-completas">
<?php require '../botones/boton-cierra-critica.php'?> <br>
<?php criticaCompleta('mdo') ?>
</div>
</section>


<!-- ///SCRIPTS /////////////////////////////////////////////////////////////////// -->
<script type="text/javascript" src="../js/preloder.js"></script>
<script type="text/javascript" src="../js/nav-bar.js"></script>
<script type="text/javascript" src="../js/obras.js"></script>
<script type="text/javascript" src="../js/slide.js"></script>

</body>

</html>
