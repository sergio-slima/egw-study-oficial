<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EGW Study</title>
    <link rel="stylesheet" href="../assets/css/header.css">
</head>
<body>
<header class="header">
    <nav class="nav">
        <div>
            <a href="../index" class="logo">
                <img src="../assets/img/logo.png" alt="Logo" />
            </a>
        </div>
        <div class="nav-buttons">
            <?php if (isset($_SESSION["user_id"])): ?>
                <div class="nav-buttons">
              <div className="header-user access-count" aria-haspopup="dialog">
                  <img src="../assets/img/fire.svg" alt="Fire" />
                    <p>0</p>
              </div>

            <a href="../auth/logout" class="button logout">
                <img 
                src="../assets/img/logout.svg" 
                alt="User Icon" 
                class="button-icon" 
                width="18" 
                height="18" 
                />
                SAIR
            </a>
          </div>
            <?php else: ?>
                <a href="../pages/login_page" class="button enter">
                    <img 
                    src="../assets/img/user.svg" 
                    alt="User Icon" 
                    class="button-icon" 
                    width="18" 
                    height="18" 
                    />
                    Entrar
                </a>
                <a href="../pages/register_page" class="button register">Criar Conta</a>
            <?php endif; ?>
        </div>
    </nav>
</header>
</body>
</html>
