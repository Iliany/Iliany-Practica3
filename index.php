
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario de Productos</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <form action="insertarDatos.php" method="POST">
        <label for="idProd">idProd:</label>
        <input type="number" name="idProd" required>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <label for="precio">Precio:</label>
        <input type="text" name="precio" required>
        <label for="existencia">Existencia:</label>
        <input type="number" name="existencia" required>
        <button type="submit">Registrar</button>
    </form>

    <table border="1">
        <tr>
            <th>idProd</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Ext.</th>
        </tr>
        <?php
        include 'conexionBD.php';
        $sql = "SELECT * FROM productos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['idProd'] . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>$" . $row['precio'] . "</td>";
                echo "<td>" . $row['existencia'] . "</td>";
                echo "<td><a href='eliminarDatos.php?idProd=" . $row['idProd'] . "' style='color: red;'>Eliminar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay productos registrados</td></tr>";
        }
        ?>
    </table>
</body>
</html>
