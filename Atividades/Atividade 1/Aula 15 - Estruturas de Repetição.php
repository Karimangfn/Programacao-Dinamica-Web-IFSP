<?php
//While
$i = 0;

while ($i < 10) {
    echo $i;
    $i++;
}
echo "<br />";

//Do While
do {
    echo $i;
    $i++;
} while ($i < 10);
echo "<br />";

//For
for ($i = 0; $i < 10; $i++){
    echo $i;
}
echo "<br />";

//For Each
$array = array("João", "Pedro", "Lucas");

foreach($array as $nomes) {
    echo $nomes;
    echo "<br />";
}
?>