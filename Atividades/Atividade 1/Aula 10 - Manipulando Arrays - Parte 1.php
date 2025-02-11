<?php

//$nomes = array("Carlos", "EspecialistaTI", "Microsoft"); // Outra Maneira de Criar Array
//$nomes = ["Carlos", "EspecialistaTI", "Microsoft"]; // Outra Maneira de Criar Array

// Outra Maneira de Criar Array
$name = "Carlos";
$company = "EspecialistaTI";
$ano = 2018;

// Pode ser feita Assim
$infoCompany = [
    $name, $company, $ano
];

// Pode ser feita com Compact
$infoCompany = compact('name', 'company', 'ano');

// Função is_array, Verificar se o valor é um Array
var_dump(is_array($infoCompany));
echo '<br />';

// Função in_array, Verifica se existe um determinado valor no Array
var_dump(in_array('Carlos', $infoCompany)); //Primeiro passamos oque queremos Buscar, e Depois o Nome do Array
?>