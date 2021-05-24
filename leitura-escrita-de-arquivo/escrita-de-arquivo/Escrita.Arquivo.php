<?
    echo "Escrita de Arquivos";
    echo "<br><br>";

    $arquivo = fopen("AlunosNovosExp.csv", "w") or
                die("Não consegui abrir o arquivo, deu erro");

    $linhaArquivo ="nome;email;matricula\n";
    fwrite($arquivoSaida, $LinhaArquivo);
    $linhaArquivo = "jose da silva;zedasilva@gamil.com;202175661\n"
    fwrite($arquivoSaida, $LinhaArquivo);
    fclose($arquivoSaida);

    file_put_contents("C:\xampp\htdocs\3DAW\Leitura-de-arquivo\AlunosNovosExp.csv"), $linhaArquivo, FILE_APPEND);

?>
