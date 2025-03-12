<?php
session_start();
require_once("../conexao.php"); // Inclui a conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    $stmt = $pdo->prepare("SELECT id, nome, senha FROM usuarios WHERE email = :email");
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario["senha"])) {
        $_SESSION["user_id"] = $usuario["id"];
        $_SESSION["user_nome"] = $usuario["nome"];
        header("Location: books");
        exit;
    } else {
        echo "<script>alert('E-mail ou senha incorretos!'); window.location.href='login_page';</script>";
    }
}
?>
