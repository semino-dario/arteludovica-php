<!-- TARJETA CON LAS IMÁGENES DE LAS TRES OBRAS QUE SE RENDERIZAN EN EL SITIO PRINCIPAL -->
<!-- EL js está en arteludovica.js -->
<!-- Los estilos están en estilos.css -->

<?php

    ?>

    </div>

<?php 


GLOBAL $tarjetasObras;

function tarjetas( $imagen, $tituloObra, $fraseObra, $linkObra ){
  return '<div class="tarjeta">
            <div class="tarjeta-imagen">
            <img src="imagenes/imagenes-principal/'. $imagen .'" class="imagen" alt="Imagen obra">

            <svg class="svg-frente voltea-svg" width="25px" height="25px" viewBox="0 0 69 48" fill="none" xmlns="http://www.w3.org/2000/svg">
<path  d="M5.90954 27.7644C3.31676 26.1949 3.34351 22.4243 5.95832 20.8917L28.0906 7.91939C30.7681 6.35005 34.1352 8.29525 34.1132 11.3987L33.9268 37.6561C33.9048 40.7595 30.5105 42.6567 27.8555 41.0495L5.90954 27.7644Z" fill="#E7DBC5"/>
<path  d="M13 24H59C61.7614 24 64 21.7614 64 19V0" stroke="#E7DBC5" stroke-width="9"/>
</svg>

            </div>
            <div class="tarjeta-contenido">
            <div class="titulo-tarjeta"> <h1 class="titulo-stencil">' . $tituloObra . '</h1> </div>
            <div class="texto-tarjeta">
            <p>' . $fraseObra .'</p>
            </div>
            <a class="boton-tarjeta" href=' . $linkObra .'> <svg width="202px" height="49px" viewBox="0 0 202 49" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="iPad-Air-10.9" transform="translate(-250.000000, -195.000000)">
                    <g class="Group" fill="#E7DBC5" transform="translate(251.935657, 195.000000)">
                        <path  class="icono-svg" style="transition: 0.5s" d="M183.680877,6.11802482 C184.464104,5.89876442 185.330976,5.97829498 186.095848,6.40858687 C186.603035,6.69391354 187.022143,7.11302176 187.30747,7.62020858 L198.710888,27.8905303 C199.14118,28.6554023 199.22071,29.5222741 199.00145,30.305501 C198.78219,31.0887278 198.264138,31.7883096 197.499266,32.2186015 C197.023534,32.4862331 196.486888,32.6268227 195.941041,32.6268227 L173.134205,32.6268227 C172.256606,32.6268227 171.462089,32.2711054 170.886972,31.6959882 C170.311855,31.1208711 169.956138,30.3263542 169.956138,29.448755 C169.956138,28.9029087 170.096727,28.3662629 170.364359,27.8905303 L181.767777,7.62020858 C182.198069,6.8553366 182.897651,6.33728523 183.680877,6.11802482 Z" id="Triangle" stroke="#979797" stroke-width="0.7390855"  transform="translate(184.537623, 17.469646) rotate(90.000000) translate(-184.537623, -17.469646) "></path>
                        <text id="ver-más-sobre-la-obr" stroke="#979797" stroke-width="0.7390855" fill="white" fill-rule="nonzero" font-family="AmericanTypewriter, American Typewriter" font-size="15.9642468" font-weight="normal">
                            <tspan x="0.19121727" y="26.0311827">ver más sobre la obra</tspan>
                        </text>
                        <line x1="3.3491505" y1="35.2629251" x2="159.61237" y2="35.2629251" id="Line-13" stroke="white" stroke-width="1.3303539" stroke-linecap="square"></line>
                    </g>
                </g>
            </g>
            </svg> </a> </div> </div>';
}

$tarjetasObras = tarjetas;


