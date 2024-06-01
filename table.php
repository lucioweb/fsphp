<?php
$host = "localhost";
$username = "user1";
$password = "password1";
$database = "exemplo1";
$table = "todo_list";
try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
$conn = null;