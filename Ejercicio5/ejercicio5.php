<?php
// a) Sumatoria utilizando la estructura de control for
function sumatoria_a($vector) {
    $suma = 0;
    for ($i = 0; $i < count($vector); $i++) {
        $suma += $vector[$i];
    }
    return $suma;
}

// b) Sumatoria utilizando la estructura for each
function sumatoria_b($vector) {
    $suma = 0;
    foreach ($vector as $valor) {
        $suma += $valor;
    }
    return $suma;
}

// c) Sumatoria utilizando la estructura de control while
function sumatoria_c($vector) {
    $suma = 0;
    $i = 0;
    while ($i < count($vector)) {
        $suma += $vector[$i];
        $i++;
    }
    return $suma;
}
?>
