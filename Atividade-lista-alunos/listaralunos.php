<?php
// Craiando a conexão 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "faeterj3daw";

    $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
    

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Listar Aluno</title>
    </head>
    <body>
<?php
        //Listando 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $sql = "SELECT * FROM alunos";
            $result = $conn->query($sql);

            echo "<table border ='1'>";
            echo "<tr>";
            echo "<th>id</th><th>nome</th><th>email</th><th>matricula</th>";
            
            while ($linha = $result->fetch_assoc()){
                echo "<tr>";
                echo "<td>". $linha["ID"] . "</td>";
                echo "<br>";
                echo "<td>". $linha["Nome"] . "</td>";
                echo "<br>";
                echo "<td>". $linha["Email"] . "</td>";
                echo "<br>";
                echo "<td>". $linha["Matricula"] . "</td>";
                echo "<br>";
                echo "</tr>";
            }

            echo "</table>";
        }
?>

    </body>
</htm>


