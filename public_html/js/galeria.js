// Lazy loding

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



// AMPLIA FOTOS

let fotos = document.querySelectorAll(".div-foto");
let botonCierraFoto = document.querySelector("#boton-cierra-foto");
let botonFotosAnterior = document.querySelector(".foto-anterior");
let botonFotosSiguiente = document.querySelector(".foto-siguiente");
let botonesFotos = document.querySelector(".botones-fotos");
let header = document.querySelectorAll(".header");
let botonCerrarSeccion = document.querySelector(".boton-cerrar-seccion");
let fotoAmpliada;

fotos.forEach((item) => {
item.addEventListener("click", function (){this.classList.add("ampliada");
botonesFotos.style.display = "block";
botonCerrarSeccion.style.display = "none";
header.forEach((item) => {
  item.style.display = "none";
} )


fotoAmpliada = this.getAttribute("id");
for (let i = 0; i < fotos.length; i++) {

if ((fotos[i].classList.contains("ampliada") == false))
{fotos[i].style.display = "none";}

}
  })
    });

   function cerrarFoto () {
  
      
      fotos.forEach((item) => {
        item.style.display = "flex";
        item.classList.remove("ampliada");
        botonesFotos.style.display = "none";
        botonCerrarSeccion.style.display = "block";
        header.forEach((item) => {
          item.style.display = "block"
        } )
      
      });
     
    }




botonCierraFoto.addEventListener("click", cerrarFoto)



function fotoAnterior(){

  fotos[fotoAmpliada].classList.remove("ampliada");
  fotos[fotoAmpliada].style.display = "none";
  if(fotoAmpliada == 0){
    fotoAmpliada = fotos.length - 1;
  }
  fotos[fotoAmpliada - 1].style.display = "flex";
  fotos[fotoAmpliada - 1].classList.add("ampliada");

  fotoAmpliada--

}

function fotoSiguiente(){

  fotos[fotoAmpliada].classList.remove("ampliada");
  fotos[fotoAmpliada].style.display = "none";

  if (fotoAmpliada == fotos.length - 1){
    fotoAmpliada = - 1
  }

  fotos[fotoAmpliada - 1 + 2].style.display = "flex";
  fotos[fotoAmpliada -1 + 2].classList.add("ampliada");

  fotoAmpliada++



}

botonFotosAnterior.addEventListener("click", fotoAnterior);
botonFotosSiguiente.addEventListener("click", fotoSiguiente);




