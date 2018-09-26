<?php
$estrelas_array = array();
$numeros_array = array();

while(sizeof($estrelas_array)<2) {
    $nova_estrela = rand(1,11);
    if (!in_array($nova_estrela,$estrelas_array)) {
        array_push($estrelas_array, $nova_estrela);
    }
}
sort($estrelas_array);

while(sizeof($numeros_array)<5) {
    $novo_numero = rand(1,50);
    if (!in_array($novo_numero,$numeros_array)) {
        array_push($numeros_array, $novo_numero);
    }
}
sort($numeros_array);

// var_dump($numeros_array);
?>