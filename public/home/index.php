<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ascend MU - Página Inicial</title>
  <link rel="stylesheet" href="assets\css\style.css">
</head>
<body>
  <header>
    <h1>Bem-vindo ao Ascend MU</h1>
    <nav>
      <ul>
        <li><a href="register.php">Registrar</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="ranking.php">Ranking</a></li>
        <li><a href="shop.php">Loja Virtual</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>

    <!-- Conteúdo principal -->
    <main>
      <section>
        <h2>Sobre o Ascend MU</h2>
        <p>Ascend MU é um servidor privado de MU Online, criado para oferecer uma experiência única e emocionante. Junte-se a nós e explore o mundo de MU!</p>
      </section>

      <section>
        <h2>Últimas Notícias</h2>
        <ul>
          <li>Evento de XP em dobro neste fim de semana!</li>
          <li>Nova atualização: Novos mapas e itens!</li>
          <li>Participe do torneio PvP e ganhe prêmios exclusivos!</li>
        </ul>
      </section>
    </main>
  </div>

  <footer>
    <p>&copy; Ascend MU. Todos os direitos reservados.</p>
  </footer>
</body>
</html>