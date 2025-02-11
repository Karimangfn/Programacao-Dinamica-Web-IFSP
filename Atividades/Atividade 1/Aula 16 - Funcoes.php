<?php

//Criando Função
function Nome() {
    $string = "Pedro";
    return $string;
}

echo Nome();

echo "<br />";

//Função recebendo Parametro, uma função pode receber inumeros parametros
function Numero($numero) {
    return $numero;
}

echo Numero(2);

echo "<br />";

//Função recebendo Parametro por Referencia
function Numero2(&$numero) {
    $numero += 20;
}

$a = 10;

Numero2($a);

echo $a; //o Valor de "a" vai receber o incremento de 20 da variavel $numero

echo "<br />";

//Função recebendo Parametro com Valor Inicial
function Numero3($numero = 10) {
    return $numero;
}

echo Numero3();
?>