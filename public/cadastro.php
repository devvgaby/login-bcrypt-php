<?php
require __DIR__ . "/../config/database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $hash = password_hash($senha, PASSWORD_BCRYPT, ['cost' => 12]);

    $sql = "INSERT INTO usuarios (email, senha) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$email, $hash]);

    echo "Usuário cadastrado com sucesso!";
    exit;
}

header("Location: ../views/cadastro.html");
exit;
