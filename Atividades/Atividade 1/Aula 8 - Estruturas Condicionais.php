<?php
$a = 10;
$b = 10;

//if
if ($a == $b) {
    echo "a é igual a b";
}
echo "<br />";

//else if 
if ($a == $b) {
    echo "a é igual a b";
} else if ($a != $b) {
    echo "a é diferente de b";
}
echo "<br />";

//else
if ($a == $b) {
    echo "a é igual a b";
} else {
    echo "a não é igual a b";
}
echo "<br />";

//Switch Case
switch($a) {
    case 8:
        echo "Valor 8";
        break;
    case 9:
        echo "Valor 9";
        break;
    case 10:
        echo "Valor 10";
        break;
    default:
        echo "Nenhum dos Valores";
}
echo "<br />";
?>
