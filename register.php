<?php
require_once("../conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $celular = trim($_POST["celular"]);
    $data_nascimento = $_POST["data_nascimento"];
    $igreja = $_POST["igreja"];
    $senha = password_hash(trim($_POST["senha"]), PASSWORD_DEFAULT);

    // Verificar se o email já está cadastrado
    $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "<script>alert('E-mail já cadastrado!'); window.location.href='register_page';</script>";
        exit;
    }

    // Inserir o novo usuário no banco de dados
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, celular, data_nascimento, igreja, senha) 
                           VALUES (:nome, :email, :celular, :data_nascimento, :igreja, :senha)");
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":celular", $celular);
    $stmt->bindParam(":data_nascimento", $data_nascimento);
    $stmt->bindParam(":igreja", $igreja);
    $stmt->bindParam(":senha", $senha);

    if ($stmt->execute()) {
        echo "<script>alert('Cadastro realizado com sucesso! Faça login.'); window.location.href='login_page';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar usuário!');</script>";
    }
}
?>
