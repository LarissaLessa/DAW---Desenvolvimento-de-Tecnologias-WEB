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
    } 
    if (ctype_digit($b)) {
        $bvalidado = 1;
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
                            echo "Operação inválida! divisão por 0";
                            echo "<br>";
                            }
                            
                        }
                    }
                    else{
                        if($operacao == "quadrado"){
                                $i = 1;
                                while ($i <= $b):
                                    $resultado =  $a * $a;
                                    $i++;
                                endwhile;
                                echo "Resultado do quadrado é $resultado";
                                echo "<br>";
                            }else{
                                if($operacao == "raiz"){
                                    $resultado =  sqrt($a);
                                    echo "Resultado do raiz é $resultado";
                                    echo "<br>";
                                    }else{
                                        if($operacao == "inverso"){
                                            $resultado =  1/$a;
                                            echo "Resultado do inverso é $resultado";
                                            echo "<br>";
                                        }else{
                                            if($operacao == "porcentagem"){
                                                $resultado =  ($a * $b)/100;
                                                echo "Resultado do porcentagem é $resultado";
                                                echo "<br>";
                                            }
                                        }
                                    }
                            }
                    }
                }
            }

include ('index_calculadora.html');
?>