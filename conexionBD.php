<?php
$debug = true; 

$servername = "localhost";
$username = "root";
$password = "090322";
$dbname = "inventario";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
 
}
?>


