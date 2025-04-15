let imagenDiegoPistola = document.querySelector("#imagen-diego-pistola");
let luisinaFantasma = document.querySelector("#luisina-fantasma");
let caraFantasma = document.querySelector("#cara-fantasma");
let etiqueta = document.querySelectorAll(".etiqueta");
let principalTejedoras = document.querySelector(".principal-tejedoras");


function muestraGaleriaPrincipal () {
principalTejedoras.style.display = "block";}

muestraGaleriaPrincipal();

function muestraFantasmas(){
  imagenDiegoPistola.style.opacity = 0.3;
  luisinaFantasma.style.opacity = 0.2;
  caraFantasma.style.opacity = 0.3;

  giraOvillo()
}

setTimeout(muestraFantasmas, 500);

function activaFantasmas(){ imagenDiegoPistola.style.opacity = 0;
luisinaFantasma.style.opacity = 0;
caraFantasma.style.opacity = 0;
setTimeout(muestraFantasmas, 1000)

}

etiqueta.forEach((item) => {item.addEventListener("click", activaFantasmas)

});

///Lazy loading para las imágenes

const lazyImages = document.querySelectorAll('.lazy');

const options = {
  rootMargin: '0px',
  threshold: 0.1
};

const observer = new IntersectionObserver(function(entries, observer) {
  entries.forEach(function(entry) {
    if (entry.isIntersecting) {
      const lazyImage = entry.target;
      lazyImage.src = lazyImage.dataset.src;
      lazyImage.classList.remove('lazy');
      observer.unobserve(lazyImage);
    }
  });
}, options);

lazyImages.forEach(function(lazyImage) {
  observer.observe(lazyImage);
});



//FUNCIONES PARA ANIMACIONES DE LOS OVILLOS EN SECCIONES DE HISTORIA Y ELENCO 


let ancho
function midePantalla() {
  ancho = window.innerWidth;
  return ancho;
}


let ovillo = document.querySelector("#ovillo7");
let ovillo2 = document.querySelector("#ovillo8");
let etiquetaHistoria = document.querySelector(".etiqueta-historia");
let etiquetaElenco = document.querySelector(".etiqueta-elenco");

function giraOvillo(){
  midePantalla()
  if ( ancho > 900) 
    {ovillo.classList.toggle("girar");
    ovillo2.classList.toggle("girar2")
 }
  ;}
