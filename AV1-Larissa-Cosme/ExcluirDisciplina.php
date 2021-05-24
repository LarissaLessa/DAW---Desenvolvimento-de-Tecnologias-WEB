<?php
include("MenuDisciplina.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nomeBanco = "testeavum";

        $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
        if ($conn->connect_error) {
            die("Conexão com erro: " . $conn->connect_error);
        }

        $ID = $_POST["ID"];
        $idValido = 0;
        
        if($ID !=""){
            $idValido = 1; 
        }

        if ($ID == 'ID'){
            $sql = DELETE FROM `disciplinas` WHERE $ID;
            echo "Disciplina Excluida com sucesso!!";
        }else{
            echo "Digite ID Novamento!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Excluir Disciplinas</title>
    <style>
            input[type=text] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                border: 3px solid #555;
                }

                input[type=submit]{
                    background-color: #555;
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-decoration: none;
                    margin: 4px 2px;
                    cursor: pointer;
                    }
        </style>
</head>
<body>
<h3>Excluir Disciplinas</h3>

<form action="ExcluirDisciplina.php" method="post">
       ID:<input type="text" name="ID"/><br><br>
        <input type="submit" name="op" value="Cadastro Disciplina" />

    <br>
</form>
</body>
</html>