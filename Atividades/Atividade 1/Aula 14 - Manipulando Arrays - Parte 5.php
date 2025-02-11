<?php

$idades = [12, 14, 18, 20, 44, 50, 98, 78, 56];

// Função end, Retorna o ultimo elemento de um Array
echo end($idades);
echo '<br />';

// Função array_filter, Filtrar os valores do Array
$idadesFiltradas = array_filter($idades, function($idade) {
    return $idade >= 18;
});
var_dump($idadesFiltradas);
echo '<br />';

// Função array_map, Formata os valores do Array
$nomes = ['Carlos', 'João', 'Vanessa'];

function applyToupper($valor) {
    return strtoupper($valor);
}

$nomes = array_map('applyToupper', $nomes);

var_dump($nomes);
?>