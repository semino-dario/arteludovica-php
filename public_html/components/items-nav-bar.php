<!-- BARRA DE NAVEGACIÓN -->
<!-- EL js está en nav-bar.js-->
<!--Los estilos están en estilos.css, nav-button.css -->

<?php 
GLOBAL $rutaItem;

function muestraBarra($ubicacion) {


if ($ubicacion === 'principal') {
$rutaItem = '';
}

elseif ($ubicacion === 'obras') {
    $rutaItem = '../index.php';
}

    echo'
  <nav class="nav-container">
  <div class="barra-elementos">  
  <a class="items-barra" href="'.$rutaItem.'#titulo-principal">INICIO</a>
  <a class="items-barra" href="'.$rutaItem.'#obras">OBRAS</a>
  <a class="items-barra" href="'.$rutaItem.'#musica-odamil">MÚSICA</a>
  <a class="items-barra" href="'.$rutaItem.'#textos-obras">TEXTOS</a>
  <a class="items-barra" href="'.$rutaItem.'#territorios-galeria">TERRITORIOS</a>
  <a class="items-barra" href="'.$rutaItem.'#equipo">EQUIPO</a>
  <a class="items-barra" href="'.$rutaItem.'#colofon">COLOFÓN</a> 
  </div>
<div class="contenedor-icono">
<div class="hamburger nav-boton hamburger-cel" id="hamburger-9">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
    </div></div>
  </nav>';

}
?>

