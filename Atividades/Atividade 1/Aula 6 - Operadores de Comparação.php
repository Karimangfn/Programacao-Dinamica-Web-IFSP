<?php
$a = 10;
$b = 10;
$c = 5;
$d = "10";

//Igual ==
var_dump($a == $b);
var_dump($a == $c);
var_dump($a == $d);
echo "<br />";

//Diferente !=, <>
var_dump($a != $b);
var_dump($a != $c);
var_dump($a != $d);
echo "<br />";

//Igual === (Neste caso é considerado o Conteudo da Variável e o Tipo da Variável)
var_dump($a === $b);
var_dump($a === $c);
var_dump($a === $d);
echo "<br />";

//Diferente !== (Neste caso é considerado o Conteudo da Variável e o Tipo da Variável)
var_dump($a !== $b);
var_dump($a !== $c);
var_dump($a !== $d);
echo "<br />";

//Menor <
var_dump($a < $b);
var_dump($a < $c);
echo "<br />";

//Maior >
var_dump($a > $b);
var_dump($a > $c);
echo "<br />";

//Menor <=
var_dump($a <= $b);
var_dump($a <= $c);
echo "<br />";

//Maior >=
var_dump($a >= $b);
var_dump($a >= $c);
echo "<br />";
?>