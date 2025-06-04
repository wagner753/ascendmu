<?php
include 'includes/db.php';
if (session_status() === PHP_SESSION_NONE) session_start();

$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT memb___id FROM MEMB_INFO WHERE memb___id = ? AND memb__pwd = ?";
    $params = [$username, $password];
    $stmt = sqlsrv_query($conn, $query, $params);

    if ($stmt && sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $_SESSION['usuario'] = $username;
        header('Location: index.php');
        exit;
    } else {
        $mensagem = "Usuário ou senha inválidos.";
    }
}
?>

<?php if (!empty($mensagem)): ?>
    <p><?php echo $mensagem; ?></p>
<?php endif; ?>

<form method="POST">
    <input type="text" name="username" placeholder="Usuário" maxlength="10" required>
    <input type="password" name="password" placeholder="Senha" maxlength="12" required>
    <button type="submit">Entrar</button>
</form>