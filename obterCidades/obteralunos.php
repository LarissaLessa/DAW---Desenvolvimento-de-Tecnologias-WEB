<?php
// Craiando a conexão 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "faeterj3daw";

    $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco); or die(" Erro ao conectar ao banco de dados requisitado");


    $cidades= array(
        
    $estado = $_GET["estado"];

    // passar o comando sql para ler a tabela
    $query = ("SELECT * FROM estado where uf = '$estado'");
    $result = $conn -> query($query);
    $linha = $result -> fetch_assoc();
    $idEstado = $linha["id"];
    
    $query2 = ("SELECT * FROM cidade where estado = $idEstado");
    $result2 =$conn ->query($query2);
    $linha2 = $result2 -> fetch_assoc();
    $nomecidade = $linha2["nome"];
    
    
    echo $nomecidade;}
?>