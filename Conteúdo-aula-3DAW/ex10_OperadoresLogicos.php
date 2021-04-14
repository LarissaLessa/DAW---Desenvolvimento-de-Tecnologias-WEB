<html>
<head>
</head>
<body>
<h1>Operadores Logicos</h1>
AND &&
<br>
OR ||
<br>
XOR
<br>
!
<br>
<?php
$n1 = 7;
$n2 = 8;
$n3 = 10;
$n4 = 10;

if ( $n1 == $n2 AND $n3 == $n4 ) {
    echo "A variavel n1 é igual a n2 : n1=$n1, n2=$n2, e n3 é igual a n4 : $n4";
} else {
    echo "A variavel n1 NÃO é igual a n2 : $n1, n2=$n2, e n3 NÃO é igual a n4 : $n3, n2=$n4";
}
echo "<br>";
if ($n1 == $n2 OR $n3 == $n4) {
    echo "A variavel n1 é igual a n2 : $n1, ou n3 é igual a n4 : $n3";
} else {
    echo "A variavel n1 NÃO é igual a n2 : $n1, n2=$n2, e n3 NÃO é igual a n4 : $n3, n4=$n4";
}
echo "<br>";
$n1=8;
if ($n1 == $n2 XOR $n3 == $n4) {
    echo "A variavel n1 é igual a n2 : n1=$n1, n2=$n2, ou n3 é igual a n4 : n3=$n3, n4=$n4";
} else {
    echo "A variavel n1 é igual a n2 : n1=$n1, n2=$n2, e n3 é igual a n4 : n3=$n3, n2=$n4";
}
echo "<br>";

?>
</body>
</html>