<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ascend MU</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header>
    <h1>Bem-vindo ao Ascend MU</h1>
    <nav>
      <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="ranking.php">Ranking</a></li>
        <li><a href="register.php">Registrar</a></li>
      </ul>
    </nav>
    <div class="login-container" style="margin-top:10px;">
      <?php if (isset($_SESSION['usuario'])): ?>
        <span>Olá, <?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
        <a href="logout.php">Sair</a>
      <?php else: ?>
        <form method="POST" action="login.php" style="display:inline;">
          <input type="text" name="username" placeholder="Usuário" maxlength="10" required>
          <input type="password" name="password" placeholder="Senha" maxlength="12" required>
          <button type="submit">Entrar</button>
        </form>
      <?php endif; ?>
    </div>
  </header>
  <div class="container">