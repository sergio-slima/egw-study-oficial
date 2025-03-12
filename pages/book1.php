<?php 
    require_once("../auth/verifica_login.php"); 

    // Definindo o livro e os capítulos manualmente (URLs específicas)
    $chapters = [
        "Capítulo 1 - Por que foi permitido o pecado?" => "https://m.egwwritings.org/pt/book/1815.2",
        "Capítulo 2 - A criação" => "https://m.egwwritings.org/pt/book/1815.115",
        "Capítulo 3 - A tentação e a queda" => "https://m.egwwritings.org/pt/book/1815.152",
        "Capítulo 4 - O plano da redenção" => "https://m.egwwritings.org/pt/book/1815.208"
    ];

    // Pega o capítulo atual pela URL (ou usa o primeiro como padrão)
    $current_chapter = isset($_GET['chapter']) ? $_GET['chapter'] : array_key_first($chapters);
    $current_url = $chapters[$current_chapter] ?? reset($chapters);

    // Função para pegar o conteúdo da URL
    function fetchContent($url) {
        $options = [
            "http" => [
                "header" => "User-Agent: Mozilla/5.0"
            ]
        ];
        $context = stream_context_create($options);
        return file_get_contents($url, false, $context);
    }

    // Pega o conteúdo do capítulo atual
    $content = fetchContent($current_url);

    // Extrai o conteúdo da div com a classe "egw_content_container"
    preg_match('/<div class="egw_content_container"[^>]*>(.*?)<\/div>/s', $content, $match);

    // Se encontrou o conteúdo, guarda para exibir
    $chapter_content = $match[1] ?? "<p>Conteúdo não encontrado!</p>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/book1.css">
</head>
<body>

    <!-- Header do Livro -->
    <header class="book-header">
        <button id="menu-btn" class="menu-toggle">☰</button>
        <h1>Patriarcas e Profetas</h1>
        <a href="../books.php" class="back-button">← Voltar</a>
    </header>

    <!-- Menu lateral suspenso -->
    <aside id="sidebar" class="sidebar">
        <div class="sidebar-header">
            <img src="../assets/img/logo.png" alt="Logo" class="sidebar-logo">
            <button id="close-menu" class="close-btn">✖</button>
        </div>

        <!-- Lista de capítulos gerada dinamicamente -->
        <ul class="chapter-list">
            <?php foreach ($chapters as $title => $url): ?>
                <li>
                    <a href="book1.php?chapter=<?= urlencode($title); ?>" 
                    class="<?= ($current_chapter == $title) ? 'active' : '' ?>">
                    <?= $title; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>

    <!-- Conteúdo do livro -->
    <main class="book-content">
        <h2><?= $current_chapter; ?></h2>
        <?= $chapter_content; ?>
    </main>


    <script src="../assets/js/global.js"></script>
    <script src="../assets/js/book1.js"></script>
</body>
</html>