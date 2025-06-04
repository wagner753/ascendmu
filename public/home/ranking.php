<?php
include 'includes/db.php';

$query = "SELECT TOP 10 Name, cLevel FROM Character ORDER BY cLevel DESC";
$stmt = sqlsrv_query($conn, $query);

echo "<h1>Ranking</h1>";
echo "<table>";
echo "<tr><th>Nome</th><th>Nível</th></tr>";
while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
    echo "<tr><td>{$row['Name']}</td><td>{$row['cLevel']}</td></tr>";
}
echo "</table>";
?>