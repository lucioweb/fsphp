<?php
// Using the extension mysqli_connect.
// Compatibility: PHP 5.3, 5.4, 5.5, 5.6 and 7.0.
// If you use PHP version 7.0, you must use this extension to be able to connect to the database.

$servername = "localhost";
$database = "luciolem_fsphp";
$username = "luciolem_fsphp";
$password = "Diferent@1968#";
$table = "TBL_SU";

echo "Database connection using mysqli_connect"."<br>";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}
echo "The connection to the $database database was successful.";
echo "The connection has been terminated.";

// Close connection
mysqli_close($conn);
