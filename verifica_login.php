<?php
session_start();
if (!isset($_SESSION["user_id"]) || !isset($_SESSION["user_nome"])) {
    header("Location: index.html"); // Redireciona para login se não estiver autenticado
    exit();
}
?>
