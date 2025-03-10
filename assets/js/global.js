document.addEventListener("DOMContentLoaded", function () {
    console.log("JS Global Carregado!");
});

// Lista de imagens
const images = [
    "./assets/img/1.png",
    "./assets/img/2.png",
    "./assets/img/3.png",
    "./assets/img/4.png",
    "./assets/img/5.png"
];

let currentImageIndex = 0;

// Atualiza a imagem principal
function updateImage() {
    const carouselImage = document.getElementById("carouselImage");
    carouselImage.src = images[currentImageIndex];

    // Atualiza a classe 'active' nas miniaturas
    document.querySelectorAll(".thumbnail").forEach((thumb, index) => {
        thumb.classList.toggle("active", index === currentImageIndex);
    });
}

// Muda a imagem ao clicar na miniatura
function changeImage(index) {
    currentImageIndex = index;
    updateImage();
}

// Próxima imagem
function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    updateImage();
}

// Imagem anterior
function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    updateImage();
}

// Inicializa a primeira imagem corretamente
document.addEventListener("DOMContentLoaded", updateImage);

// Função para rolar o carrossel
function scrollCarousel(direction) {
    const carousel = document.querySelector(".carousel");
    const scrollAmount = 200; // Quantidade de rolagem

    if (direction === 1) {
        carousel.scrollLeft += scrollAmount; // Rola para a direita
    } else {
        carousel.scrollLeft -= scrollAmount; // Rola para a esquerda
    }
}


// Função para scrollar até o topo
const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

// Votar Topo
document.getElementById('scrollToTopButton').addEventListener('click', function(event) {
    event.preventDefault(); // Previne o comportamento padrão do botão
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

const scrollToNextSection = () => {
    const headerHeight = document.querySelector('header').offsetHeight; // Altura do cabeçalho fixo
    const nextSection = document.querySelector('.for-who-section');
    if (nextSection) {
      window.scrollTo({
        top: nextSection.offsetTop - headerHeight,
        behavior: 'smooth'
      });
    } 
};