<?php
$host = "localhost";
$username = "user1";
$password = "password1";
$database = "exemplo1";
$table = "tbl_todo_list";

$conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);

// Defina o modo de erro para exceções
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Consulta para selecionar todos os registros da tabela 'tab_final'
$query = "SELECT * FROM tbl_todo_list";

try {
    $selecionar = $conn->prepare($query);
    $selecionar->execute();
    $registros = $selecionar->fetchAll(PDO::FETCH_OBJ);

    foreach ($registros as $registro) {
        echo "Descrição do ítem: " . $registro->content . "<br />";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

// Feche a conexão
$conn = null;
