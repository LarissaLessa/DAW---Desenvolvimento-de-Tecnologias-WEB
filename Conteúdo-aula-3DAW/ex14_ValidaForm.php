<?php
setlocale (LC_ALL, 'pt_BR');
$nomeValido = 0;
$idadeValida = 0;
$emailValido = 0;

$nome = $_GET["nome"];
$idade = $_GET["idade"];
$email = $_GET["email"];

echo "nome = $nome";
echo "<br>";
echo "idade = $idade";
echo "<br>";
echo "email = $email";
echo "<br>";

if (ctype_alpha($nome)) {
    $nomeValido = 1;
} else {
    echo "Nome inválido";
    echo "<br>";
}
if (ctype_digit($idade)) {
    $idadeValida = 1;
} else {
    echo "Idade inválida";
    echo "<br>";
}
if ($email != "") {
    $emailValido=1;
} else {
    echo "Email inválido";
    echo "<br>";
}

if ($nomeValido == 1 and $idadeValida == 1 and $emailValido == 1) {
    echo "Ola $nome";
    echo "<br>";
    echo "Sua idade é $idade";
    echo "<br>";
    echo "Seu email é $email";
} else {
    echo "Preencha novamente o formulario";
}
echo "<br>";
?>
