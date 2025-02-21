<?php
session_start();
require_once("../conexao.php");

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
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
}
?>
