<html>
<head>
</head>
<body>
<h1>Comando de loop</h1>

<br>
<?php
$n1 = 0;
$n2 = 25;
$alunos = array("MAYCON DIAS", "LUCAS MELO", "SERGIO SILVA", "DIEGO CANCELAS", "CAIO PEREIRA", "Juliana Marques da Silva", "LARISSA PAIVA", "Bárbara Nascimento");

while ($n1 < 45) {
    echo "While - O valor de n1 = " . $n1;
    echo "<br>";
    $n1 += 5;
}
echo "<br>";

do {
    echo "Do - O valor de n1 = " . $n2;
    echo "<br>";
    $n2 += 7;
} while ($n2 < 50);
echo "<br>";

for ($x1=0; $x1 < 8; $x1++) {
    echo "For - O valor de x1 = $x1";
    echo "<br>";
    echo "For - São alunos de 3DAW: $alunos[$x1]";
    echo "<br>";
}
echo "<br>";
echo "<br>";
foreach ($alunos as $aluno) {
    echo "For - São alunos de 3DAW: $aluno";
    echo "<br>";
}
echo "<br>";
echo "<br>";
?>
</body>
</html>
