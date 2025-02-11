<?php

$numeroM = $numeroN = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroM = $_POST["numeroM"];
    $numeroN = $_POST["numeroN"];
    $arrayM = array();
    $arrayN = array();
    $arrayP = array();


    if (empty($numeroM or strstr($numeroM, "") &  $numeroN or strstr($numeroN, ""))) {
        echo "Campo Numero (M) e Numero (N) Vazio!";
    } else if (empty($numeroM or strstr($numeroM, ""))) {
        echo "Campo Numero (M) Vazio!";
    } else if (empty($numeroN or strstr($numeroN, ""))) {
        echo "Campo Numero (N) Vazio!";
    } else if (is_numeric($numeroM) === false & is_numeric($numeroN) === false) {
        echo "Campo Numero (M) e (N) não são Números!";
    } else if (is_numeric($numeroM) === false) {
        echo "Campo Numero (M) não é um Número!";
    } else if (is_numeric($numeroN) === false) {
        echo "Campo Numero (N) não é um Número!";
    } else if ($numeroM < 0 & $numeroN < 0) {
        echo "Campo Numero (M) e (N) tem que ser maior que 0 !";
    } else if ($numeroM < 0) {
        echo "Campo Numero (M)  tem que ser maior que 0 !";
    } else if ($numeroN < 0) {
        echo "Campo Numero (N) tem que ser maior que 0 !";
    } else if ($numeroM > 1000) {
        echo "Campo Numero (M) não pode ser maior que 1000!";
    } else if ($numeroN > $numeroM) {
        echo "Campo Numero (N) não pode ser maior que o Campo Numero (M)";
    } else {

        //Numeros (M)
        for ($i = 0; $i < $numeroM; $i++) {
            $arrayM[$i] = rand(1, 9);
        }

        //Numeros (N)
        for ($j = 0; $j < $numeroN; $j++) {
            $arrayN[$j] = $arrayM[$j];
        }

        //Numeros Primos
        for ($k = 0; $k < $numeroN; $k++) {
            $count = 0;
            for ($l = 1; $l <= $arrayN[$k]; $l++) {
                if ($arrayN[$k] % $l === 0) {
                    $count++;
                }
            }
            if ($count === 2) {
                array_push($arrayP, $arrayN[$k]);
            }
        }

        // mostrando os Números
        echo "Numeros (M): ";
        foreach ($arrayM as $NumerosM) {
            echo $NumerosM . ", ";
        }
        echo "<br />";

        echo "Numeros (N): ";
        foreach ($arrayN as $NumerosN) {
            echo $NumerosN . ", ";
        }
        echo "<br />";

        echo "Numeros Primos: ";
        foreach ($arrayP as $NumerosPrimos) {
            echo $NumerosPrimos . ", ";
        }
    }
}
?>

<br />
<form action="Formulario.php">
    <input type="submit" value="Voltar">