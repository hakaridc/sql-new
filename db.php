<?php
<section_star();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "login_db";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connet_error) {
    die("conexão falhou: " . $conn->connect, $dbname);
}

?>