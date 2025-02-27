<?php
session_start();
session_unset();
session_destroy(); // Destroi a sessão do usuário
header("Location: index.html"); // Redireciona para a página inicial
exit();
?>
