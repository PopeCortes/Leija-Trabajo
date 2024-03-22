<?php
require 'DB/connect.php';

$sqlView = "SELECT productos.id, productos.num_parte, productos.precio, productos.cantidad, marcas.marca, productos.descripcion, productos.imagen, productos.stock_minimo, productos.fecha
FROM productos 
INNER JOIN marcas
ON productos.idMarca = marcas.id";

$sqlView = $connect->prepare($sqlView);
$sqlView->execute();
$dtsProducts = $sqlView->fetchAll();




