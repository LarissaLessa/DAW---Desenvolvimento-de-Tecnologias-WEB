<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
+= Incremento de soma
<br>
-= Incremento de subtração
<br>
$x++ = Incremento de 1
<br>
$x-- = Decremento de 1
<?php
$nome1 = "Bárbara Nascimento";
$n1 = 7;
$n2 = 8;
$n3 = 10;
$n4 = 3;

$f1 = 8.5476;
$f2 = 5.6523;

echo "<h2>Operadores Aritmeticos</h2>";

echo "<br> n1 + n2 = " . ($n1 + $n2);
echo "<br> n1 - n2 = " . ($n1 - $n2);
echo "<br>";
$n3 = $n1 + $n2;
echo $n3;
echo "<br>";
$n3 = $n3 + $n4;
echo $n3;
echo "<br>";
$n3 += $n4;
echo $n3;
echo "<br>";
echo $n3++;
echo "<br>";
?>
</body>
</html>