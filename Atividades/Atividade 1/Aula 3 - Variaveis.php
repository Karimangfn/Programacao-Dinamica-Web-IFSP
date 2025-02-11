<?php
//Criando Variavel = $ + Nome da Variavel
$Nome = "<h1>João<h1>";
$Sobrenome = "Ferreira";

//Imprimir valores na Tela = comando "echo", por Exemplo echo + Nome da Variavel
echo $Nome;

//Criando Variavel Constante (Não pode ser alterada)
define("Constante", 12345);
var_dump(Constante);

const Constante2 = 12345;
var_dump(Constante2);

// Constante = 5; Esse comando não ira funcionar pois a variavel é Constante
// Constante2 = 5; Esse comando não ira funcionar pois a variavel é Constante
?>