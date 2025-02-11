<?php
//Array
$array = array("Alfredo", "João", "Amanda"); // ou $array = []; 
print_r($array);
echo "<br />";

$array2[] = "Alfredo";
$array2[] = "João";
$array2[] = "Amanda";
print_r($array2);
echo "<br />";

//Array Push, Adicionar valores no Array
array_push($array, "Leticia");
print_r($array);
echo "<br />";

//Especificando chave e valor em Arrays
$array3 = array("valor1" => 10,
                "valor2" => 20,
                "valor3" => 30,);
print_r($array3);

//Criando um novo campo no Array
$array3['valor4'] = 40;
print_r($array3);

//Especificando chave e valor em uma chave
$array4 = array(
    "valores" => [
        'valor1' => 10,
        'valor2' => 20,
        'valor3' => 30,
    ],
    "Nomes" => [
        'nome1' => 'Fernando',
        'nome2' => "Alexandre",
        'nome3' => 'Amanda'
    ]
);
print_r($array4);
?>
