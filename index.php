<!-- 3.- Crea una página que muestre una tabla bidimensional con la tabla de multiplicar
del 1 al 10.  -->

<?php
$tabla = array();
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $tabla[$i][$j] = $i * $j;
    }
}

echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . $tabla[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>