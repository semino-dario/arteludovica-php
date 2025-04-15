//FUNCIONES PARA EL SITIO PRINCIPAL

//ACLARACIÓN: el código js de las seccion EQUIPO se encuentra en components/tarjeta-equipo.php y autoescritura.js respectivamente

///SMOOTH SCROLLING PARA LA NAV-BAR
// Select all links in the nav-bar
const links = document.querySelectorAll('nav a');

// Add an event listener to each link
links.forEach(link => {
  link.addEventListener('click', (event) => {
    // Prevent the default behavior of the link
    event.preventDefault();

    // Get the target section by its ID
    const target = document.querySelector(link.getAttribute('href'));

    // Smoothly scroll to the target section
    target.scrollIntoView({
      behavior: 'smooth'
    });
  });
});


///MUESTRA TÍTULO Y SUBTÍTULOS AL CARGAR PÁGINA PRINCIPAL ///////////////////////////////////

let tituloPrincipal = document.querySelector("#titulo-principal");
let  subtitulo = document.querySelector(".subtitulo");
let fotoPrincipal = document.querySelector(".imagen-portada")
let copete = document.querySelector(".copete");

function muestraTituloPrincipal (){tituloPrincipal.style.opacity = 1;
  subtitulo.style.opacity = 1;
  fotoPrincipal.style.opacity = 1;
  copete.style.opacity = 1;

};

muestraTituloPrincipal();

///TARJETAS DE LAS OBRAS /////////////////////////////////

let tarjetaObra = document.querySelectorAll(".tarjeta")
let svgFrente = document.querySelectorAll(".svg-frente");

///Función para dar vuelta las tarejtas
function volteaTarjeta (tarjeta) {
  tarjeta.classList.toggle("descubierta")
  }

tarjetaObra.forEach(function(elemento) {
  elemento.addEventListener("click", function() {
    volteaTarjeta(this)

  });
});


//MÚSICA/////////////////////////////////////////////////

let imagenDisco = document.querySelector(".imagen-disco");
let musica = document.querySelector(".div-musica");
let musicaContenido = document.querySelector(".musica-contenido");
let cierraMusica = document.querySelector("#cierra-musica");
let seccionMusica = document.querySelector(".seccion-musica");

function activarMusica (){
  imagenDisco.classList.add("girar")
  musicaContenido.style.opacity = 0;
  seccionMusica.style.borderBottom = "none";
  function abrirYoutube(){
  musicaContenido.style.display = "none";
  musica.style.display = "inline-block";

}

  setTimeout(abrirYoutube, 1000)
}

function cierraDivMusica(){
  musicaContenido.style.display = "flex";
  musicaContenido.style.opacity = 1;
  seccionMusica.style.borderBottom = "solid 1px #E7DBC5";
  musica.style.display = "none";
  imagenDisco.classList.remove("girar")

}

musicaContenido.addEventListener("click", activarMusica);
cierraMusica.addEventListener("click", cierraDivMusica);


//Función para cerar div con música cuando se hace click por fuera de ella
document.addEventListener("click", function(event) {
  if (event.target.closest(".seccion-musica") === null) {
    cierraDivMusica()
  }
});



//DESCARGA DE TEXTOS //////////////////////////////////////////////////////

let botonDescarga = document.querySelector("#boton-descarga");
let botonCierraDescarga = document.querySelector("#boton-cierra-descarga");
let pdf = document.querySelectorAll(".pdf");
let botonesDescarga = document.querySelector(".div-boton-descarga");
let textosDescarga = document.querySelector(".textos-descarga");

pdf.forEach(function(item) {

  item.addEventListener("click", function() {
//Función para seleccionar texto a descargar

    if(this.classList.contains("selected")){
        cierraDescarga()
    }
    else{
      cierraDescarga()
      this.classList.add("selected");
      botonesDescarga.style.display = "block";
      botonesDescarga.style.opacity = 1;
      textosDescarga.style.borderWidth = 0;
    }

//Función para descargar el pdf
function descarga(){

let documento = document.createElement("a");
documento.target = "_blank";

if(pdf[0].classList.contains("selected")){
documento.href = "pdf/tejedoras.pdf";
}

else if (pdf[1].classList.contains("selected"))
{
  documento.href = "pdf/banquete.pdf"}

document.body.appendChild(documento);
documento.click();
document.body.removeChild(documento);
  }




botonDescarga.addEventListener("click", descarga);
botonCierraDescarga.addEventListener("click", cierraDescarga)

})
})


//Función para cerrar tablero de descarga
function cierraDescarga(){
  botonesDescarga.style.opacity = 0;
  textosDescarga.style.borderBottomWidth = "1px";
  pdf.forEach(function(item) {
  item.classList.remove("selected")})}


//Cierra el tablero de descarga cuando se clickea afuera de la sección
document.addEventListener("click", function(event) {
  if (event.target.closest(".descarga-pdf") === null) {
    cierraDescarga();  
  }
});


// COLOFÓN ////////////////////////////////

const speed = 60;

let infoContacto = document.querySelector(".info-contacto");

function typeWriter(text, element) {
  let i = 0;

  function write() {
    if (i < text.length) {
      element.innerHTML += text.charAt(i);
      i++;
      setTimeout(write, speed);
    }
    else {
      setTimeout(() => {
        infoContacto.style.opacity = 1;
      }, 100);}
  }

  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
      write();
      observer.disconnect();
    }
  });

  observer.observe(element);
}

typeWriter("Este sitio comenzó a estar en línea en abril de 2023. Muchas gracias por tu visita.", document.getElementById("text1"));




