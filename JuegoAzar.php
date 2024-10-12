<!DOCTYPE html>
<html>
<head>
    <title>Master Mind</title>
    <link rel="stylesheet" href="cssStyle.css">
</head>
<body>
    
    <h1 azul>Juego Master Mind</h1>
    <h1>Consiste en adivinar los colores que el computador ha seleccionado Aleatoriamente</h1>

    <h2>Quiere jugar, coloque los numeros correspondientes a los colores ??</h2>
      
        <div class="color-square azul"></div>
        <label for="color1"> 1</label>
        <div class="color-square rojo"></div>
        <label for="color2"> 2</label>
        <div class="color-square negro"></div>
        <label for="color3"> 3</label>
        <div class="color-square verde"></div>
        <label for="color4"> 4</label>
        <div class="color-square amarillo"></div>
        <label for="color5"> 5</label>

    <form  method="post" action="">
       
            <label for="num1">Primer color</label>
            <input type="number" name="num1"min="1" max="25" ><br>
            <label for="num2">Segundo color:</label>
            <input type="number" name="num2" min="1" max="25"><br>
            <label for="num3">Tercer color:</label>
            <input type="number" name="num3" min="1" max="25"><br>
            <br>
            <br>
                       
            <input type="submit" name= "Enviar"  value="Adivino" >
           
          
     </form>
     
     <?php

if (isset($_POST['Enviar']) && !empty($_POST["num1"])) {
    $color_pc = [];
    $color_user = [];
    $mensajes = [];

    // Generar colores aleatorios para el computador
    for ($i = 0; $i < 3; $i++) {
        $aleatorio = rand(1, 5);
        while (in_array($aleatorio, $color_pc)) {
            $aleatorio = rand(1, 5);
        }
        $color_pc[$i] = $aleatorio; 
    }

    // Imprimir los colores generados para depuración
    echo "Colores generados por el computador: " . implode(", ", $color_pc) . "<br>";

    // Obtener los colores del usuario
    $color_user = array_values($_POST);
    
    // Contar aciertos y posiciones
    $cont = 0;
    foreach ($color_user as $index => $color) {
        if (in_array($color, $color_pc)) {
            $cont++;
            if ($color_pc[$index] == $color) {
                $mensajes[] = "Color " . $color . " acertado en posición " . ($index + 1);
            } else {
                $mensajes[] = "Color " . $color . " acertado pero en posición incorrecta";
            }
        }
    }

    // Mostrar resultados
    echo "<br>Colores acertados: " . $cont . "<br>";
    foreach ($mensajes as $mensaje) {
        echo $mensaje . "<br>";
    }
}
?>
       
       
        
       
       <!--  <label><input type="checkbox" name="opcion5"> Verde</label><br>
        <label><input type="checkbox" name="opcion1">Amarillo</label><br>
        <label><input type="checkbox" name="opcion4">Negro</label><br> 
        <label><input type="checkbox" name="opcion3"> Rojo</label><br>
        <label><input type="checkbox" name="opcion2"> Azul</label><br> -->
        

      

 
   
</body>
</html>