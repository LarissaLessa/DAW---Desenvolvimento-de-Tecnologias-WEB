<html>
<head>
</head>
<body>
<h1>Operadores Comparacao</h1>
== Igual, === Identico, != diferente, <> Diferente
<br>
> maior que, < menor que, >= maior ou igual, <= menor ou igual
<br>
<br>

<?php
$nome1 = "Bárbara Nascimento";
$n1 = 7;
$n2 = 8;
$n3 = 10;
$n4 = 7;
$f5 = 7.00;

if ( $n1 == $n2 ) {
    echo "A variavel n1 é igual a n2 : $n1";
} else {
    echo "As variaveis n1 e n2 são diferentes, n1=$n1 e n2=$n2";
}
echo "<br>";
if ($n1 === $n4) {
    echo "A variavel n1 é identica a n4 : $n1";
}
echo "<br>";
if ($n1 === $f5) {
    echo "A variavel n1 é identica a f5 : $n1";
} else {
    echo "As variaveis n1 e f5 são diferentes, n1=$n1 e f5=$f5";
}
echo "<br>";
if ($n1 == $f5) {
    echo "A variavel n1 é igual a f5 : $n1";
} else {
    echo "As variaveis n1 e f5 são diferentes, n1=$n1 e f5=$f5";
}
echo "<br>";
if ( $n1 > $n2 ) {
    echo "A variavel n1 é maior que n2 : n1=$n1 e n2=$n2";
} else {
    echo "n1 não é maior que n2, n1=$n1 e n2=$n2";
}
echo "<br>";
if ( $n1 >= $n4 ) {
    echo "A variavel n1 é maior ou igual a n4 : n1=$n1 e n4=$n4";
} else {
    echo "n1 não é maior ou igual a n4, n1=$n1 e n4=$n4";
}
echo "<br>";
?>
</body>
</html>
