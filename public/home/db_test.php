<?php
$serverName = "149.56.247.247";
$connectionOptions = [
    "Database" => "MuOnline",
    "Uid" => "sa",
    "PWD" => "Silver654.",
    "TrustServerCertificate" => true // Adicione esta linha para ignorar a validação do certificado SSL
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die("Erro ao conectar ao banco de dados: " . print_r(sqlsrv_errors(), true));
} else {
    echo "Conexão com o banco de dados estabelecida com sucesso!";
}
?>