<!-- TARJETAS PERSONALES DEL EQUIPO--->
<!-- Se abren cuando se clikea en la imagen de foto-equipo.php -->
<!-- El js está incluído en este mismo archivo -->
<!-- Los estilos están en estilo.css -->


  <div>
   <img  id="imagen-retrato"src="" width="150px" alt="integrante de la compañía">
  <h2 id="nombre-retrato"></h2>
  </div>
  <div class="contenido-retrato">
  <br>
  <p id="texto-retrato"></p>  <br>
  <p id="link-integrante" ></p> <br>
  <?php require 'botones/boton-cruz-obras.php' ?>
  </div>

<script> 
let tarjetaPersonal = document.querySelector(".tarjeta-equipo")
let linkTarjeta = document.querySelectorAll(".foto-link")
let linkMiniatura = document.querySelectorAll(".foto-link2")
let botonCierraTarjeta = document.querySelector("#cierra-tarjeta")
let nombreRetrato = document.querySelector("#nombre-retrato")
let contentRetrato = document.querySelector("#texto-retrato")
let imagenRetrato = document.querySelector("#imagen-retrato")
let linkIntegrante = document.querySelector("#link-integrante")
let retrato = eval(<?php echo $json;?>); /// toma json con información de base de datos para las tarjetas

  
/// MUESTRA TARJETA CUANDO SE HACE CLICK EN LA FOTO
function mostrarTarjeta () {
let nombreFoto
let nombreTarjeta
for (let i = 0; i < 9; i++ ){
  nombreFoto = this.alt 
}  

retrato.forEach(element => {
  if (element.nombre === nombreFoto) {
    nombreRetrato.textContent = element.nombre;
    contentRetrato.textContent = element.content;
    imagenRetrato.src = element.ruta;
    linkIntegrante.innerHTML = element.link;

     }
    }
  );
    tarjetaPersonal.classList.add("muestra-tarjeta");
}

linkTarjeta.forEach(element => {
    element.addEventListener( "click", mostrarTarjeta );
 }
);

linkMiniatura.forEach(element => {
    element.addEventListener( "click", mostrarTarjeta );
 }
);



//// CIERRA LA TARJETA CON CLICK EN BOTÓN CRUZ
function cierraTarjeta () {

 if (tarjetaPersonal.classList.contains("muestra-tarjeta")){
  tarjetaPersonal.classList.remove("muestra-tarjeta");}

}
botonCierraTarjeta.addEventListener("click", cierraTarjeta);


/// Cierra tarjeta cuando se clickea fuera de ella
document.addEventListener("click", function(event) {
  if (event.target.closest(".contenedor-equipo") === null) {
cierraTarjeta()
 }
});

</script>