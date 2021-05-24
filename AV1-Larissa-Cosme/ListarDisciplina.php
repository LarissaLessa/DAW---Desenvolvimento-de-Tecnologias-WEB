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
        

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar Disciplinas</title>
    <link rel="stylesheet" type="text/css" href="./Css/Style.css" />
</head>
<body>
<h3>Listar Disciplinas</h3>
<form action="ListarDisciplina.php" method="post">
    <input type="submit" name="op" value="Listar Disciplina">
    <br>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "SELECT * FROM disciplinas";
    $result = $conn->query($sql);
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th><th>nome</th><th>Periodo</th><th>IdPreRequisitos</th>";
    while($linha = $result->fetch_assoc()){
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