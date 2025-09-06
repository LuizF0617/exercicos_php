<?php
$numero = 1;

echo "<h3>Números pares de 1 a 20:</h3>";

while ($numero <= 20) {
    if ($numero % 2 == 0) {
        echo $numero . "<br>";
    }
    $numero++;
}
?>
