<?php

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$unidades = $_POST["cantidad"];
$codigo = $_POST["codigo"];

function calcularTotal($precio, $unidades) {
    $total = $precio + $unidades;
    return $total;
}

$total = calcularTotal($precio, $unidades);

if ($unidades > 5) {
    $total = $total * 0.90;
}

if ($codigo = "DAM2026") {
    $total = $total * 0.95;
}

echo "<h2>Resumen de compra</h2>";
echo "Cliente: " . $nombre . "<br>";
echo "Precio final: " . $total . " €<br>";

echo "<h3>Productos comprados</h3>";

for ($i = 1; $i < $unidades; $i++) {
    echo "Producto número " . $i . "<br>";
}

?>
