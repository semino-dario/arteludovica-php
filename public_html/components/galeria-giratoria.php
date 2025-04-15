<!-- FUNCÓN PARA GALERÍA GIRATORIA EN EL BANQUETE -->
<!-- Los estilos están en banquete.css-->

<?php function galeriaGiratoria() {
for ($i = 0; $i < 8; $i++ ) {
    echo
    '<span class="spanes" style="--i:'. ($i + 1) .'">
    <img class="imagen-giratoria lazy" data-src="../imagenes/imagenes-banquete/banquete-danza/danza'. ($i + 1) .'.webp" alt="" />
      </span>';
  }  
}
?>
