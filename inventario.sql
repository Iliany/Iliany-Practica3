CREATE DATABASE inventario;

USE inventario;

CREATE TABLE productos (
    idProd INT AUTO_INCREMENT PRIMARY KEY,
    nombre TEXT,
    precio DECIMAL(10, 2),
    existencia INT
);
