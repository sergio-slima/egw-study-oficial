document.addEventListener("DOMContentLoaded", function () {
    // Validar Celular
    const celularInput = document.getElementById("celular");

    function formatarCelular(value) {
        // Remove tudo que não for número
        value = value.replace(/\D/g, "");

        // Limita ao máximo de 11 dígitos (DDD + Número)
        if (value.length > 11) value = value.slice(0, 11);

        // Aplica a máscara conforme o tamanho
        if (value.length > 10) {
            // Formato (99) 99999-9999
            return value.replace(/^(\d{2})(\d{5})(\d{4})$/, "($1) $2-$3");
        } else if (value.length > 6) {
            // Formato (99) 9999-9999
            return value.replace(/^(\d{2})(\d{4})(\d{0,4})$/, "($1) $2-$3");
        } else if (value.length > 2) {
            // Formato (99) 9999
            return value.replace(/^(\d{2})(\d{0,5})$/, "($1) $2");
        } else if (value.length > 0) {
            // Formato (99
            return value.replace(/^(\d{0,2})$/, "($1");
        }

        return value;
    }

    celularInput.addEventListener("input", function () {
        this.value = formatarCelular(this.value);
    });

    celularInput.addEventListener("keypress", function (event) {
        // Bloqueia caracteres que não sejam números
        if (!/[0-9]/.test(event.key)) {
            event.preventDefault();
        }
    });

    // Validar Email
    function validarEmail(input, errorElementId) {
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        const errorElement = document.getElementById(errorElementId);
        
        if (!emailPattern.test(input.value)) {
            errorElement.textContent = "Digite um e-mail válido.";
            errorElement.style.display = "block";
            return false;
        } else {
            errorElement.style.display = "none";
            return true;
        }
    }

    function validarSenhas() {
        const senha = document.getElementById("senha").value;
        const confirmarSenha = document.getElementById("confirmarSenha").value;
        const senhaError = document.getElementById("senhaError");

        if (senha !== confirmarSenha) {
            senhaError.textContent = "As senhas não coincidem.";
            senhaError.style.display = "block";
            return false;
        } else {
            senhaError.style.display = "none";
            return true;
        }
    }

    // Validação no formulário de login
    const loginEmail = document.getElementById("email");
    const loginForm = document.getElementById("loginForm");

    if (loginEmail && loginForm) {
        loginEmail.addEventListener("input", () => validarEmail(loginEmail, "emailError"));

        loginForm.addEventListener("submit", function (event) {
            if (!validarEmail(loginEmail, "emailError")) {
                event.preventDefault();
            }
        });
    }

    // Validação no formulário de cadastro
    const registerEmail = document.getElementById("registerEmail");
    const registerForm = document.getElementById("registerForm");

    if (registerEmail && registerForm) {
        registerEmail.addEventListener("input", () => validarEmail(registerEmail, "registerEmailError"));

        registerForm.addEventListener("submit", function (event) {
            if (!validarEmail(registerEmail, "registerEmailError") || !validarSenhas()) {
                event.preventDefault();
            }
        });
    }

    // Validação em tempo real da senha
    document.getElementById("confirmarSenha").addEventListener("input", validarSenhas);

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