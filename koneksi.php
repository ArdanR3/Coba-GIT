<?php
$serverName = "ARDANRIZQI3\SQLEXPRESS";
$connectionOptions = [
    "Database" => "Percobaan",
    "TrustServerCertificate" => true,
];
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    echo "Koneksi Gagal:<br>";
    die(print_r(sqlsrv_errors(), true));
}
?>