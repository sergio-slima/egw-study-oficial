<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EGW Study</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
    <div class="auth-container">
        <div class="auth-form">
            <a href="index" class="logo">
                <img src="./assets/img/logo.png" alt="Logo EGW Study" class="auth-logo">
            </a>
            <h2>LOGIN</h2>
            <form id="loginForm" action="login.php" method="POST">
                <input type="email" id="email" name="email" placeholder="E-mail" required>
                <span class="error-message" id="emailError"></span>
                <input type="password" name="senha" placeholder="Senha" required>
                <button type="submit">Entrar</button>
            </form>
            <p>Não tem uma conta? <a href="register_page">Cadastre-se</a></p>
        </div>
        <div class="auth-image">
            <img src="./assets/img/background.jpg" alt="Imagem ilustrativa">
        </div>
    </div>
    <script src="./assets/js/global.js"></script>
    <script src="./assets/js/login.js"></script>
</body>
</html>
