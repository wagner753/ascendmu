<aside class="sidebar">
  <h2>Top Jogadores</h2>
  <ul>
    <?php
    include 'includes/db.php'; // Conexão com o banco de dados

    $query = "SELECT TOP 5 Name, cLevel FROM Character ORDER BY cLevel DESC";
    $stmt = sqlsrv_query($conn, $query);

    if ($stmt) {
      while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "<li>{$row['Name']} - Nível {$row['cLevel']}</li>";
      }
    } else {
      echo "<li>Erro ao carregar ranking.</li>";
    }
    ?>
  </ul>

  <h2>Top Guilds</h2>
  <ul>
    <?php
    $query = "SELECT TOP 5 G_Name, G_Score FROM Guild ORDER BY G_Score DESC";
    $stmt = sqlsrv_query($conn, $query);

    if ($stmt) {
      while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "<li>{$row['G_Name']} - Pontos {$row['G_Score']}</li>";
      }
    } else {
      echo "<li>Erro ao carregar ranking.</li>";
    }
    ?>
  </ul>
</aside>