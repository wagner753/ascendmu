
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ranking - Ascend MU</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <div class="container">
    <main>
      <h1>Ranking</h1>
      <table>
        <tr><th>Nome</th><th>Nível</th></tr>
        <?php
        include 'includes/db.php';
        $query = "SELECT TOP 10 Name, cLevel FROM Character ORDER BY cLevel DESC";
        $stmt = sqlsrv_query($conn, $query);
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo "<tr><td>{$row['Name']}</td><td>{$row['cLevel']}</td></tr>";
        }
        ?>
      </table>
    </main>
  </div>
</body>
</html>
<?php include 'footer.php'; ?>