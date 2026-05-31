<?php
// estos se encarga exclusivamente de la lógica y los cálculos.
// se verifica este archivo mediante el envío del formulario POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //recibe y almacena los datos en arreglos unidimensionales paralelos
    $productos = $_POST['productos'];
    $precios = $_POST['precios'];
    
    // Contamos cuantos productos se registraron para usarlo en el promedio y ciclos
    $cantidad = count($productos);
    //calcula el precio total usando la funcion array_sum()
    $total_venta = array_sum($precios);
    //Calcular el promedio dividiendo el total entre la cantidad de elementos
    $promedio = $total_venta / $cantidad;
    //Determinar el producto mas caro con la funcion max()
    $precio_maximo = max($precios); // Encuentra el valor mas alto
    $indice_maximo = array_search($precio_maximo, $precios); // Busca en qué posicion del arreglo está ese valor
    $producto_caro = $productos[$indice_maximo]; // Usa esa posicion para encontrar el nombre en el arreglo paralelo

    //busca el producto más barato usando la función min()
    $precio_minimo = min($precios); // Encuentra el valor mas bajo
    $indice_minimo = array_search($precio_minimo, $precios); // Busca su posicion
    $producto_barato = $productos[$indice_minimo]; // Extrae el nombre correspondiente

    // Pasar el control al archivo de presentación visual
    // Al incluir resultados.php aquí, ese archivo tendrá acceso a todas las variables que acabamos de calcular.
    include 'resultados.php';

} else {
    // Mensaje de error si alguien intenta entrar a procesar.php directamente desde la URL
    echo "<p>Acceso denegado. Por favor, envía el formulario desde <a href='index.php'>index.php</a>.</p>";
}
?>