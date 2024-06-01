<?php

// PDO (PHP Data Object):
// PDO is object-oriented only and supports various types of databases, including MySQL, MSSQL, Informix, and PostgreSQL.
// It also supports prepared statements.
// Here's an example of a connection using PDO

$host = "localhost";
$database = "crud";
$username = "user1";
$password = "password1";
$table = "tbl_usuarios";

try {
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Database connection using PDO. <br>The connection to the $database database was successful.";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
