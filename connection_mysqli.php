<?php
// Using the extension mysqli_connect.
// Compatibility: PHP 5.3, 5.4, 5.5, 5.6 and 7.0.
// If you use PHP version 7.0, you must use this extension to be able to connect to the database.

$host = "localhost";
$username = "user1";
$password = "password1";
$database = "exemplo1";
$table = "todo_list";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
echo "A conexão com o banco de dados ($database) utilizando mysqli_connect, foi bem-sucedida.";

// Close connection
mysqli_close($conn);