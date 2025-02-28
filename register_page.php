<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - EGW Study</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="auth-container">
        <div class="auth-form">
            <img src="./img/logo.png" alt="Logo EGW Study" class="auth-logo">
            <h2>CADASTRO</h2>
            <form id="registerForm" action="register.php" method="POST">
                <input type="text" name="nome" placeholder="Nome Completo" required>                
                <input type="tel" id="celular" name="celular" placeholder="(99) 99999-9999" required>
                <span class="error-message" id="celularError"></span>
                <input type="date" name="data_nascimento" required>

                <!-- Igreja -->
                <select name="igreja" required>
                    <option value="">Selecione sua Igreja</option>
                    <option value="IASD LARANJEIRAS">IASD LARANJEIRAS</option>
                    <option value="IASD MILAGRES">IASD MILAGRES</option>
                    <option value="IASD SUNIL">IASD SUNIL</option>
                    <option value="IASD VILA MARANHAO">IASD VILA MARANHÃO</option>
                    <option value="IASD COLINAS">IASD COLINAS</option>
                    <option value="IASD VILA UNIAO">IASD VILA UNIÃO</option>
                    <option value="IASD CONQUISTA DA LAGOA">IASD CONQUISTA DA LAGOA</option>
                    <option value="IASD SUDELANDIA">IASD SUDELANDIA</option>
                    <option value="IASD JARDIM AULIDIA">IASD JARDIM AULIDIA</option>
                    <option value="OUTRA">OUTRA</option>
                </select>

                <p>DADOS DE ACESSO</p>
                <input type="email" id="registerEmail" name="email" placeholder="E-mail" required>
                <span class="error-message" id="registerEmailError"></span>
                <!-- Senha e confirmação de senha -->
                <input type="password" id="senha" name="senha" placeholder="Senha" required>
                <input type="password" id="confirmarSenha" placeholder="Confirmar Senha" required>
                <span class="error-message" id="senhaError"></span>

                <button type="submit">Cadastrar</button>
            </form>
            <p>Já tem uma conta? <a href="login.html">Faça login</a></p>
        </div>
        <div class="auth-image">
            <img src="./img/background.jpg" alt="Imagem ilustrativa">
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
