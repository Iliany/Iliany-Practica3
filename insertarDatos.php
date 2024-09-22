<?php
include 'conexionBD.php';

$idProd = $_POST['idProd'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$existencia = $_POST['existencia'];

$sql = "INSERT INTO productos (idProd, nombre, precio, existencia) VALUES ('$idProd', '$nombre', '$precio', '$existencia')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo producto registrado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
exit();
?>
