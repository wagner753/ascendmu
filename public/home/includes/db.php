<?php
$serverName = "149.56.247.247";
$connectionOptions = [
    "Database" => "MuOnline",
    "Uid" => "sa",
    "PWD" => "Silver654.",
    "TrustServerCertificate" => true // ignora a validação do certificado SSL
];

$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>