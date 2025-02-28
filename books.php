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
    <?php include("header.php"); ?>  

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
    

    <script src="./scripts.js"></script>
</body>
</html>