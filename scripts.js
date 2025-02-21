document.addEventListener("DOMContentLoaded", function () {
    // Referências aos elementos do modal
    const loginModal = document.getElementById("loginModal");
    const registerModal = document.getElementById("registerModal");
    const loginBtn = document.getElementById("openLoginModal");
    const registerBtn = document.getElementById("openRegisterModal");
    const closeButtons = document.querySelectorAll(".close");

    // Abrir o modal de login
    loginBtn.onclick = function () {
        loginModal.style.display = "block";
    };

    // Abrir o modal de registro
    registerBtn.onclick = function () {
        registerModal.style.display = "block";
    };

    // Fechar os modais ao clicar no "X"
    closeButtons.forEach(function (btn) {
        btn.onclick = function () {
            loginModal.style.display = "none";
            registerModal.style.display = "none";
        };
    });

    // Fechar o modal ao clicar fora dele
    window.onclick = function (event) {
        if (event.target === loginModal) {
            loginModal.style.display = "none";
        }
        if (event.target === registerModal) {
            registerModal.style.display = "none";
        }
    };

    // Função de Login via AJAX
    document.getElementById("loginForm").onsubmit = function (event) {
        event.preventDefault();
        const formData = new FormData(this);

        fetch("login.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = "books.html";
            } else {
                alert("E-mail ou senha incorretos!");
            }
        })
        .catch(error => console.error("Erro:", error));
    };

    // Função de Cadastro via AJAX
    document.getElementById("registerForm").onsubmit = function (event) {
        event.preventDefault();
        const formData = new FormData(this);

        fetch("register.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Cadastro realizado! Faça login.");
                registerModal.style.display = "none";
            } else {
                alert("Erro ao cadastrar usuário.");
            }
        })
        .catch(error => console.error("Erro:", error));
    };
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

// Lista de imagens
const images = [
    "./img/1.png",
    "./img/2.png",
    "./img/3.png",
    "./img/4.png",
    "./img/5.png"
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