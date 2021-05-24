
<?php
include("MenuDisciplina.php");
// Craiando a conexão 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["Nome"];
    $periodo = $_POST["Periodo"];
    $idPreRequisitos = $_POST["IdPreRequisitos"];
    $creditos = $_POST["Creditos"];

    $nomeValido = 0;
    $periodoValido = 0;
    $idPreRequisitoValido = 0;
    $creditosValidoS = 0;

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "testeavum";

    $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);

    if ($conn->connect_error) {

        die("Conexão com erro: " . $conn->connect_error);
    }else{
            if ($nome != ""){
                $nomeValido = 1;
            }
            if ($periodo != "" and ctype_digit($periodo)){
                $periodoValido = 1;
            }
            if ($idPreRequisitos != "" and ctype_digit($idPreRequisitos)){
                $idPreRequisitoValido = 1;
            }
            if ($creditos != "" and ctype_digit($creditos)){
                $creditosValido = 1;
            }

            if ($nomeValido == 1 && $periodoValido == 1 && $idPreRequisitoValido == 1 && $creditosValido == 1){

                $sql = "INSERT INTO `disciplinas` (`Nome`, `Periodo`, `IdPreRequisitos`, `Creditos`) VALUES ('$nome','$periodo','$idPreRequisitos','$creditos')";
                $result = $conn->query($sql);

                if($conn->query($sql) == TRUE){
                    echo "Disciplina inserida com sucesso!!"; 
                }else{  
                    echo "Erro ao tenter inserir a Disciplina";
                }
    }
    }

    
}else{
    echo "Preenchimento do formulário inválido! Digite novamente.";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Cadastro de Disciplina</title>
        <link rel="stylesheet" type="text/css" href="./Css/Style.css" />
    </head>
    <body>  
        <h1 style="Text-align:center">Cadastre a Disciplina</h1>
    <form action="InserirDisciplina.php"  method="POST">
        Nome:<input type="text" name="Nome"/><br><br>
        Período:<input type="text" name="Periodo"/><br><br>
        IdPreRequisito:<input type="text" name="IdPreRequisitos"/><br><br>
        Créditos:<input type="text" name="Creditos"/><br><br>
        <input type="submit" name="op" value="Cadastro Disciplina" />
    </form>
    </body>
</htm>


