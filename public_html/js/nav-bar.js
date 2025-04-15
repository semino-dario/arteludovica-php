//BARRA DE NAVEGACIÓN

let itemsBarra = document.querySelectorAll(".items-barra");
let elementosBarra = document.querySelector(".barra-elementos");
let hamburger = document.querySelector(".hamburger");
let navContainer = document.querySelector(".nav-container");

// Carga la barra cuando se carga la página
function muestraBarra() {
navContainer.style.display = "flex";

  function opacidadBarra() {
    navContainer.style.opacity = 1;
  } 
  setTimeout(opacidadBarra, 100);
}

setTimeout(muestraBarra, 300);

// Agrega hover a los ítems, esta función se utiliza después con un setTimeout para que el hover no se dispare mientras se abre la barra
function agregaHover() {
  itemsBarra.forEach(element => {
    element.classList.toggle("items-desplegados");
  });
  
}

// Función para abrir y cerrar la barra
function activaBarra() {
hamburger.classList.toggle("is-active");
elementosBarra.classList.toggle("desplegada");
setTimeout(agregaHover, 1000);
}

//Agrega activaBarra al ícono hamburguesa

hamburger.addEventListener("click", activaBarra)

// Agrega activaBarra a los items de la barra para que ésta se cierre cada vez que se clikea en uno de ellos
for (i=0; i<itemsBarra.length; i++) {
itemsBarra[i].addEventListener("click", activaBarra)
}

//Función para cerrar la barra cuando se hace click afuera de ella

function cierraNav() {
  if (elementosBarra.classList.contains("desplegada") ) {
    elementosBarra.classList.remove("desplegada");
    hamburger.classList.remove("is-active");
    agregaHover();
  }
}

document.addEventListener("click", function(event) {
  if (event.target.closest(".nav-container") === null) {
    cierraNav();
  }
});

