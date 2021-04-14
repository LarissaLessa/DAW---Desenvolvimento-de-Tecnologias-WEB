<?php

setlocale (LC_ALL, 'pt_BR');
if ($_SERVER["REQUEST_METHOD"]  == 'POST') {
    $avalidado = 0;
    $bvalidado = 0;
    $resultado = 0;

    $a = $_POST["a"];
    $b = $_POST["b"];
    $operacao = $_POST["operacao"];

    if (ctype_digit($a)) {
        $avalidado = 1;
    } else {
        echo "Número inválido";
        echo "<br>";
    }
    if (ctype_digit($b)) {
        $bvalidado = 1;
    } else {
        echo "Número inválida";
        echo "<br>";
    }

}  if($operacao == "soma"){
            $resultado = $a + $b;

            echo "Resultado da soma é $resultado";
            echo "<br>";
        }else{
            if($operacao =="subtracao"){
                $resultado = $a - $b; 

                echo "Resultado da subtração é $resultado";
                echo "<br>";
                }else{
                    if($operacao == "multiplicacao"){
                        $resultado = $a * $b;

                        echo "Resultado da multiplição é $resultado";
                        echo "<br>";
                    }
                    else{
                        if($operacao == "divisao"){
                            if($b !=0){
                            $resultado = $a / $b;
                            echo "Resultado da divisão é $resultado";
                            echo "<br>";


                            }else{
                            echo "Operação inválida!";
                            echo "<br>";
                            }
                            
                        }
                    }
                }
            }
include ('index_calculadora.html');
?>