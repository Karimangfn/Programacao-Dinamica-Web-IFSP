<?php
//AND &&
var_dump(5 == 5 && 5 != 4);
var_dump(5 != 5 AND 5 != 4);
echo "<br />";

//OR ||
var_dump(5 == 5 || 5 == 4);
var_dump(5 != 5 OR 5 == 4);
echo "<br />";

//XOR (Apenas quando uma das condições são Verdadeiras, não as duas)
var_dump(5 == 5 XOR 5 == 4);
var_dump(5 == 5 XOR 5 != 4);
echo "<br />";

//Negação !
var_dump(!(5 == 5));
var_dump(!(5 != 5));
?>