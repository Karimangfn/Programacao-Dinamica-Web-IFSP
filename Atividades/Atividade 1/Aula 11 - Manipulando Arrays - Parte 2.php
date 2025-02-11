<?php

$infoCompany = [
    'nome'     => 'EspecialistaTI',
    'fundador' => 'Carlos Ferreira',
    'ano'      => 2018,
];

$infoCompanyTwo = [
    'curso'       => [
        'PHP', 'JS', 'Java'
    ],
    'total_curos' => 26,
];

// Função array_keys, Retorna qual a chave do Array
var_dump(array_keys($infoCompany));
echo '<br />';

// Função array_values, Retorna apenas os valores do Array
var_dump(array_values($infoCompany));
echo '<br />';

// Função count, Retorna quantidade de itens no nosso Array
var_dump(count($infoCompany));
echo '<br />';

// Função array_merge, faz a junção de 1 ou mais Arrays
$infoCompany = array_merge($infoCompany, $infoCompanyTwo);
echo '<pre>';  //Função <pre>, deixa a vizualiação dos valores do Array igual um "Json"
var_dump($infoCompany);
?>