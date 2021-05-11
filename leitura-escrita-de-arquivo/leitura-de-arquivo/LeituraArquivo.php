<?
    echo "Leitura de Arquivos";
    echo "<br><br>";
    echo readfile("alunosImp.csv");

    //Abrir arquivo somente para a leitura
    $arquivo = fopen ("alunosimp.csv", "r") or die ("Não consegui abrir!!");
    //Realiza a leitura do arquivo
    echo fread($arquivo, filesize("alunosImp2.csv"));

    //Apresenta os dados na tela 
    while(!feof($arquivo)){
        $linha = fgets($arquvio);
        echo $linha;
        echo "<br>"
    }
    echo"final do arquivo";
    //Fecha o arquivo
    felose($arquivo);
?>
