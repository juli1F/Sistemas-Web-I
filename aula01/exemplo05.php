<?php
     //Operadores relacionais(== != > >= <= < )

    $a= 1;
    $b= 5;

    $resultado= $a < $b; 
    // Resultado verdadeiro é sempre 1
    //  // Resultado falso é sempre vazio


    echo "Resultado = $resultado";
    echo "<hr>";
    var_dump($resultado);

    echo "<br>";

    if ($resultado == true){
        echo "Resultado = Sim";
    }else {
            echo "Resultado = Não";
    }

?>