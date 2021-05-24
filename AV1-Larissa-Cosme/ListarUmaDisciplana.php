<?php
include("MenuDisciplina.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar uma Disciplinas</title>
    <link rel="stylesheet" type="text/css" href="./Css/Style.css" />
</head>
<body>
<h3>Listar uma Disciplinas</h3>
<form action="ListarUmaDisciplana.php" method="post">
     ID: <input type = "text" name="ID">
     <br>
    <input type="submit" name="op" value="Listar Uma Disciplina">
    <br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $nomeBanco = "testeavum";

        $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
        if ($conn->connect_error) {
            die("Conexão com erro: " . $conn->connect_error);
        }
    $id = $_POST["ID"];

    $sql = "SELECT `ID`, `Nome`, `Periodo`, `IdPreRequisitos`, `Creditos` FROM `disciplinas` WHERE $id";
    $result = $conn->query($sql);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th><th>nome</th><th>Periodo</th><th>IdPreRequisitos</th>";
    
    if($linha = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td> " . $linha["ID"] . "</td>";
        echo "<br>";
        echo "<td> " . $linha["Nome"] . "</td>";
        echo "<br>";
        echo "<td> " . $linha["Periodo"] . "</td>";
        echo "<br>";
        echo "<td> " . $linha["IdPreRequisitos"] . "</td>";
        echo "<br>";
        echo "<tr>";
    }
    echo "</table>";
}
?>
</body>
</html>
