<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = md5($password); // MU Server usa MD5 para senhas

    $query = "INSERT INTO MEMB_INFO (memb___id, memb__pwd) VALUES (?, ?)";
    $params = [$username, $hashedPassword];
    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt) {
        echo "Conta criada com sucesso!";
    } else {
        echo "Erro ao criar conta.";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Usuário" required>
    <input type="password" name="password" placeholder="Senha" required>
    <button type="submit">Registrar</button>
</form>