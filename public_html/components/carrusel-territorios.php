<!--Carrusel de fotos de la sección territorio que se renderiza en sitio principal-->

<div class="slideshow-container">
<div class="mySlides fade">
    <img class="imagen-carrusel" alt="imagen de galería" src="imagenes/imagenes-territorios/escobar-lerchundi/escobar-lerchundi-3.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img class="imagen-carrusel" alt="imagen de galería" src="imagenes/imagenes-territorios/performance/museo/museo-4.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img class="imagen-carrusel" alt="imagen de galería" src="imagenes/imagenes-territorios/grabacion/grabacion-6.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img class="imagen-carrusel" alt="imagen de galería" src="imagenes/imagenes-territorios/muestra-recoleta/recoleta-4.jpg" style="width:100%">
  </div>
</div>

<script>

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); 
}
</script>

