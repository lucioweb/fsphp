<?php

// PDO (PHP Data Object):
// PDO is object-oriented only and supports various types of databases, including MySQL, MSSQL, Informix, and PostgreSQL.
// It also supports prepared statements.
// Here's an example of a connection using PDO

$host = "localhost";
$username = "user1";
$password = "password1";
$database = "exemplo1";
$table = "tbl_todo_list";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    echo "Database connection using PDO. <br>The connection to the $database database was successful.";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
