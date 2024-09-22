<?php
include 'conexionBD.php';

$idProd = $_GET['idProd'];

$sql = "DELETE FROM productos WHERE idProd='$idProd'";

if ($conn->query($sql) === TRUE) {
    echo "Producto eliminado exitosamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();

header("Location: index.php");
exit();
?>
