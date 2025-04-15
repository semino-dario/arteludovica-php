/////ABRE Y CIERRA GALERIA PRINCIPAL DE LAS OBRAS//////////

///////FUNCIONES DE LAS ETIQUETAS////////
let seccionGaleria = document.querySelector("#galeria-principal");
let seccionesDesplegadas = document.querySelectorAll(".secciones-desplegadas");
let botonCierre = document.querySelector(".boton-cerrar-seccion");
let secciones = document.querySelectorAll(".etiqueta");
let index;
let botonPasaObra = document.querySelectorAll(".boton-pasa-obra");
let botonHome = document.querySelector(".contenedor-icono-celular");

function muestraBotones () {
  botonPasaObra.forEach((item) => {
    item.style.display = "block";

  } )
  botonHome.style.display = "block";
}

secciones.forEach((item) => {
  item.addEventListener("click", function () {
    botonPasaObra.forEach((item) => {
      item.style.display = "none";
    } )
    botonHome.style.display = "none";


    index = this.getAttribute("id");

    if (this.classList.contains("seleccionada")) {
      cierraSecciones();
      cierraseccionesDesplegadas();
      setTimeout(muestraBotones, 500);
      botonCierre.style.display = "none";


    } else {
      cierraSecciones();
      cierraseccionesDesplegadas();
      this.classList.add("seleccionada");
      botonCierre.style.display = "block";

      seccionGaleria.style.opacity = 0;

      function bloqueaGaleria() {
        seccionGaleria.style.display = "none";
        seccionesDesplegadas[index].style.display = "block";
        
      }

      setTimeout(bloqueaGaleria, 600);

      function muestraSeccion() {
        for (i = 0; i < seccionesDesplegadas.length; i++) {
          seccionesDesplegadas[index].style.opacity = 1;
        }
      }
      setTimeout(muestraSeccion, 650);
    }
  });
});

function cierraSecciones() {
  secciones.forEach((item) => {
    item.classList.remove("seleccionada");

  });

 
}

function cierraseccionesDesplegadas() {

  
  seccionesDesplegadas.forEach((item) => {
    item.style.opacity = 0;
  });

  function bloqueaSeccion() {
    seccionesDesplegadas.forEach((item) => {
      item.style.display = "none";
      seccionGaleria.style.display = "block";

    });
  }

  setTimeout(bloqueaSeccion, 500);

  function muestraGaleria() {
    seccionGaleria.style.opacity = 1;
  }

  setTimeout(muestraGaleria, 800);

  cierraSecciones();

}


//OCULTA Y MUESTRA GALERIA PRINCIPAL EN CELULAR

let galeriaCelular = document.querySelector("#galeria-principal-celular");

let etiquetasCelular = document.querySelectorAll(".etiqueta-celular");

etiquetasCelular.forEach((item) => {item.addEventListener("click", function(){

    if (this.classList.contains("seleccionada")) {
      galeriaCelular.style.display = "none"
    }

    else{galeriaCelular.style.display = "block"}

  })

});

//FUNCIÓN PARA BOTÓN QUE CIERRA LAS OBRAS

//mide ancho de pantalla para para que se despliegue o se cierre la galería principal de celular o de monitor según sea el caso
let width
function getViewportWidth() {
  width = window.innerWidth;
  return width;
}


function botonCerrar () {

  getViewportWidth();


botonCierre.style.display = "none";
if (width > 900) {  
  cierraSecciones();
  cierraseccionesDesplegadas();
  setTimeout(muestraBotones, 500);
}
else {
  if (galeriaCelular) {
  galeriaCelular.style.display = "block";}
  cierraseccionesDesplegadas();
  setTimeout(muestraBotones, 500);

}
}

  botonCierre.addEventListener("click", botonCerrar);

