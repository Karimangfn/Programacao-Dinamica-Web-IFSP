<?php

$carrinho = [
    0 => 'Macarrão', 
    1 => 'Feijão', 
    2 => 'Arroz', 
    3 => 'Batata'
];

// Função arsort, Deixa o Array em Ordem Decrescente
arsort($carrinho);
var_dump($carrinho);
echo '<br />';

// Função asort, Deixa o Array em Ordem Crescente
asort($carrinho);
var_dump($carrinho);
echo '<br />';

// Função sort, Deixa o Array e as Keys em Ordem Crescente
sort($carrinho);
var_dump($carrinho);
?>