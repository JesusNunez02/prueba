<?php
if (!isset($_SESSION['matriz'])) {
    $matriz = [];
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matriz[$i][$j] = rand(1, 50);
        }
    }
    $_SESSION['matriz'] = $matriz;
    $_SESSION['numerosCantados'] = [];
    $_SESSION['aciertos'] = 0;
}

function mostrarMatriz($matriz) {
    echo "<table border='1'>";
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 5; $j++) {
            echo "<td>" . ($matriz[$i][$j] === 'X' ? 'X' : $matriz[$i][$j]) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function cantarNumero(&$matriz, $n) {
    $numerosCantados = $_SESSION['numerosCantados'];
    $aciertos = $_SESSION['aciertos'];

    do {
        $numero = rand(1, 50);
    } while (in_array($numero, $numerosCantados));

    $numerosCantados[] = $numero;
    echo "Número cantado: $numero<br>";

    foreach ($matriz as &$fila) {
        foreach ($fila as &$valor) {
            if ($valor == $numero) {
                $valor = 'X';
                $aciertos++;
            }
        }
    }

    $_SESSION['numerosCantados'] = $numerosCantados;
    $_SESSION['aciertos'] = $aciertos;

    if ($aciertos >= $n) {
        echo "<h2>¡Bingo! Has conseguido $n aciertos.</h2>";
        session_destroy(); 
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cantar'])) {
        $n = $_POST['aciertos'];
        cantarNumero($_SESSION['matriz'], $n);
    } elseif (isset($_POST['reiniciar'])) {
        session_destroy();
        session_start();
        $_SESSION['matriz'] = [];
        $_SESSION['numerosCantados'] = [];
        $_SESSION['aciertos'] = 0;
    }
}

// Mostrar la matriz solo una vez después de cualquier acción
mostrarMatriz($_SESSION['matriz']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego de Bingo</title>
</head>
<body>
    <form method="post">
        <label for="aciertos">Cantidad de aciertos para ganar:</label>
        <input type="number" id="aciertos" name="aciertos" min="1" max="25" required>
        <input type="submit" name="cantar" value="Cantar número">
        <input type="submit" name="reiniciar" value="Reiniciar">
    </form>
</body>
</html>




