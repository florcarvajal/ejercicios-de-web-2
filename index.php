<?php

require_once 'ejercicio3/ejercicio3.php';

$texto1 = "Hola";
$texto2 = "mundo";

echo "Textos combinados: " .concatenar($texto1, $texto2);


require_once 'ejercicio4/ejercicio4.php';

$valor = 5;

echo "Valor inicial:"

incrementar($valor);

echo "El valor incrementado es: " . incrementar($valor);


require_once 'ejercicio5/ejercicio5.php';

$array = [1, 2, 3, 4, 5];

echo "Sumatoria con for: " . sumatoria_a($array) . "<br>"; 
echo "Sumatoria con foreach: " . sumatoria_b($array) . "<br>";  
echo "Sumatoria con while: " . sumatoria_c($array) . "<br>"; 


require_once 'ejercicio6/ejercicio6.php';

// Instanciar la clase Saludar con nombre y apellido
$persona = new Saludar("Florencia", "Carvajal");

// Llamar al método saludoFormal y mostrar el resultado
echo $persona->saludoFormal(9) . "<br>"; // Salida: Buenos días Ezequiel Perez

// Llamar al método saludoInformal y mostrar el resultado
echo $persona->saludoInformal(9) . "<br>"; 