<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda DAM</title>
</head>
<body>
    <h2>Calculadora de compras</h2>

    <form action="procesar.php" method="GET">
        <label>Nombre del cliente:</label>
        <input type="text" name="nombre" required>
        <br><br>

        <label>Precio del producto:</label>
        <input type="number" name="precio" step="0.01" required>
        <br><br>

        <label>Cantidad:</label>
        <input type="number" name="unidades" min="1" required>
        <br><br>

        <label>Código de descuento:</label>
        <input type="text" name="codigo">
        <br><br>

        <button type="button">Calcular compra</button>
    </form>
</body>
</html>
