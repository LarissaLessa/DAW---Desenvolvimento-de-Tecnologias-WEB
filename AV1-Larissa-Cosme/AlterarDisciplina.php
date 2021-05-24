<?php
include("MenuDisciplina.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $novo = $_POST["Novo"];
        $alteracao = $_POST["alteracao"];
        $ID = $_POST["ID"];

        

        $novoValido = 0;
        $idValido = 0;


        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nomeBanco = "testeavum";


        $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
        if ($conn->connect_error) {
            die("Conexão com erro: " . $conn->connect_error);
        }

        if($novo !=""){
            $novoValido = 1;
        }

        if($ID !=""){
            $idValido = 1; 
        }

        if($idValido == 1){
            if($idValido == 1){
            if($alteracao == 'Nome') {
                $sql = "UPDATE 'disciplinas' SET Nome='$novo' WHERE ID = '$ID'";
            }
            else{
                if($alteracao == 'Periodo'){
                    $sql = "UPDATE 'disciplinas' SET 'Periodo' ='$novo' WHERE 'ID' = '$ID'";
                }else {
                    if ($alteracao == 'IdPreRequisitos'){
                        $sql = "UPDATE 'disciplinas' SET 'IdPreRequisitos' ='$novo' WHERE 'ID' = '$ID'";
                    } else{
                        if ($alteracao == 'Creditos'){
                            $sql = "UPDATE 'disciplinas' SET 'Creditos'='$novo' WHERE 'ID' = '$ID'";
                        }
                    }
                }
            }
            }
        }
    }else{
        echo "Insira ID novamento!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alterar Disciplinas</title>
</head>
<body>
<h3>Alterar Disciplinas</h3>

<form action="AlterarDisciplina.php" method="post">
       ID:<input type="text" name="ID"/><br><br>
       <div class="custom-select">
       <label> Selecione alteração desejada</label>
            
       Alterar: <select name="alteracao">
                    <option value="Nome">Nome</option>
                    <option value="Periodo">Periodo</option>
                    <option value="IdPreRequisitos">IdPreRequisito</option>
                    <option value="Creditos">Creditos</option>
                </select>
                <br>
        </div>
        Nova informação: <input type="text" name="Novo">
        <br>

        <input type="submit" name="op" value="Alterar Disciplina" />
        
    <br>
</form>
</body>
</html>