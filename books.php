<?php require_once("verifica_login.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <?php include("./includes/header.php"); ?>  

    <section class="user-progress">
        <div class="user-info">
            <h2>Olá, <?php echo isset($_SESSION["user_nome"]) ? $_SESSION["user_nome"] : "Usuário"; ?>!</h2>
        </div>
        <div class="progress-container">
            <span>Progresso do Curso</span>
            <div class="progress-bar">
                <div class="progress" style="width: 20%;">20%</div>
            </div>
        </div>
    </section>
    
    <section class="book-series">
        <h2>Série Conflito dos Séculos</h2>
        <div class="book-grid">
            <!-- Livro acessível -->
            <div class="book accessible">
                <a href="book1.php">
                    <img src="./assets/img/1.png" alt="Livro 1">
                    <p>O Grande Conflito</p>
                </a>
            </div>

            <!-- Livros bloqueados -->
            <div class="book locked">
                <img src="./assets/img/2.png" alt="Livro 2">
                <div class="lock-icon">🔒</div>
                <p>Patriarcas e Profetas</p>
            </div>

            <div class="book locked">
                <img src="./assets/img/3.png" alt="Livro 3">
                <div class="lock-icon">🔒</div>
                <p>Profetas e Reis</p>
            </div>

            <div class="book locked">
                <img src="./assets/img/4.png" alt="Livro 4">
                <div class="lock-icon">🔒</div>
                <p>O Desejado de Todas as Nações</p>
            </div>

            <div class="book locked">
                <img src="./assets/img/5.png" alt="Livro 5">
                <div class="lock-icon">🔒</div>
                <p>Atos dos Apóstolos</p>
            </div>
        </div>
    </section>


    <script src="./scripts.js"></script>
</body>
</html>