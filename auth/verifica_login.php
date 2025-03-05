<?php
session_start();
if (!isset($_SESSION["user_id"]) || empty($_SESSION["user_nome"])) {
    session_destroy(); // Garante que nenhuma sessão inválida continue ativa
    header("Location: index"); // Redireciona para o login
    exit();
}
?>
