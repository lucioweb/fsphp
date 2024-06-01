<?php
// PDO (PHP Data Object):
// PDO is object-oriented only and supports various types of databases, including MySQL, MSSQL, Informix, and PostgreSQL.
// It also supports prepared statements.
// Here's an example of a connection

$host = "localhost";
$username = "root";
$password = "root";
$database = "exemplos";
$table = "todo_list";

echo "Database connection using PDO"."<br>";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    echo "The connection to the $database database was successful.";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}