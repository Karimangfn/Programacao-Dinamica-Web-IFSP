<?php

$carrinho = ['Arroz', 'Sabão', 'Feijão', 'Bala'];
var_dump($carrinho);
echo '<br />';

// Função array_pop, Remove o ultimo elemento do Array
array_pop($carrinho);
var_dump($carrinho);
echo '<br />';

// Função array_shift, Remove o primeiro elemento do Array 
array_shift($carrinho);
var_dump($carrinho);
echo '<br />';

// Função unset, Remove Um elemento especifico do Array ou o Array inteiro
unset($carrinho[0]);
var_dump($carrinho);
echo '<br />';

// Função array_push, Adiciona um elemento no Final do Array
array_push($carrinho, 'Tapete');
var_dump($carrinho);
echo '<br />';

// Função array_unshift, Adiciona um elemento no Inicio do Array
array_unshift($carrinho, 'Microondas');
var_dump($carrinho);
echo '<br />';

// Função array_unique, Remove elementos duplicados do Array
array_unshift($carrinho, 'Microondas'); //Adicionando elemento repitido
var_dump($carrinho);
echo '<br />';

$carrinho = array_unique($carrinho);
var_dump($carrinho);
?>