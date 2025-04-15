
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

///Galería giratoria

let galeriaPrincipalBanquete = document.querySelector("#galeria-principal");
let seccionHistoria = document.querySelector("#seccion-historia");

function muestraGaleriaBanquete() {
  galeriaPrincipalBanquete.style.opacity = 1;
}

muestraGaleriaBanquete();
