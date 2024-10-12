<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    <form method="POST" action="">
        <input type="number" name="Enrrollado" value="0" min="0"> Enrrollado 10$<br>
        <input type="number" name="Perro_Caliente" value="0" min="0"> Perro Caliente 1$<br>
        <input type="number" name="Tequeno" value="0" min="0"> Tequeno 3$<br>
        <input type="number" name="Pizza" value="0" min="0"> Pizza 15$<br>
        <input type="number" name="Hamburguesa" value="0" min="0"> Hamburguesa 5$<br>
        <input type="submit" name="Enviar" value="Comprar">
    </form>

    <?php
    if (isset($_POST['Enviar'])) {
        $menu = [
            "Enrrollado" => ["precio" => 10],
            "Perro_Caliente" => ["precio" => 1],
            "Tequeno" => ["precio" => 3],
            "Pizza" => ["precio" => 15], 
            "Hamburguesa" => ["precio" => 5]
        ];    

        $precioTotal = 0;

        foreach ($menu as $producto => $info) {
            $cantidad = isset($_POST[$producto]) ? (int)$_POST[$producto] : 0;
            if ($cantidad > 0) {
                $precioTotal += $cantidad * $info['precio'];
            }
        }

        echo "<h2>Total a Pagar: $$precioTotal</h2>";
    }
    ?>
</body>
</html>