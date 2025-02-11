<?php
$a = 10;
$b = 20;
$c = 30;

//Atribuição e Soma +=
$soma = $a += $b;
echo "Valores de Soma";
echo "<br />";
echo $soma;

$soma += $c;

echo "<br />";
echo $soma;
echo "<br />";
echo "<br />";

//Atribuição e Subtração -=
$subtracao = $a -= $b;
echo "Valores de Subtracao";
echo "<br />";
echo $subtracao;

$subtracao -= $c;

echo "<br />";
echo $subtracao;
echo "<br />";
echo "<br />";

//Atribuição e Multiplicação *=
$multiplicacao = $a *= $b;
echo "Valores de Multiplicacao";
echo "<br />";
echo $multiplicacao;

$multiplicacao *= $c;

echo "<br />";
echo $multiplicacao;
echo "<br />";
echo "<br />";

//Atribuição e Divisão /=
$divisao = $a /= $b;
echo "Valores de Divisao";
echo "<br />";
echo $divisao;

$divisao /= $c;

echo "<br />";
echo $divisao;
echo "<br />";
echo "<br />";

//Atribuição e Resto da Divisão %=
$resto = $a %= $b;
echo "Valores de Resto da Divisao";
echo "<br />";
echo $resto;

$resto %= $c;

echo "<br />";
echo $resto;
echo "<br />";
echo "<br />";

//Atribuição e Concatenação .=
$concatenacao = $a .= $b;
echo "Valores Concatenados";
echo "<br />";
echo $concatenacao;

$concatenacao .= $c;

echo "<br />";
echo $concatenacao;
echo "<br />";
?>