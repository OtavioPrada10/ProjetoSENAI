<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oficina";
// criando conexão 
$conn = new mysqli($servername, $username, $password, $dbname);
//Checar conexão
if ($conn->connect_error) {
    die("Tragico, tragico " . $conn->connect_error);
}