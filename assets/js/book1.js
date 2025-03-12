// Abre o menu lateral
document.getElementById("menu-btn").addEventListener("click", () => {
    document.getElementById("sidebar").classList.add("open");
});

// Fecha o menu lateral
document.getElementById("close-menu").addEventListener("click", () => {
    document.getElementById("sidebar").classList.remove("open");
});

// Pega todos os links de capítulos
const chapterLinks = document.querySelectorAll(".chapter-link");
const bookContent = document.querySelector(".book-content");

// Carrega o capítulo ao clicar
chapterLinks.forEach(link => {
    link.addEventListener("click", async (e) => {
        e.preventDefault();

        const chapterNumber = link.getAttribute("data-chapter");
        const apiUrl = `https://egwwritings.org/api/v1/books/PP/chapters/${chapterNumber}?lang=pt`;

        try {
            const response = await fetch(apiUrl);
            const data = await response.json();

            // Exibe o conteúdo do capítulo
            bookContent.innerHTML = `
                <h2>${data.chapter.title}</h2>
                <p>${data.chapter.content}</p>
            `;
        } catch (error) {
            console.error("Erro ao carregar capítulo:", error);
            bookContent.innerHTML = "<p>Erro ao carregar o conteúdo.</p>";
        }
    });
});
