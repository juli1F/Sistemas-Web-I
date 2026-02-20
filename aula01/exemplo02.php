<?php
    $nome = "Juliana";
    $idade = 15;
    $altura = 1.58;
    $status = true;

    //DEPURANDO CÓDIGO
    var_dump($nome); //mostra o número da string(nome)
    echo "<br>";
    print_r($nome); //só mostra o nome
    echo "<br>";

    //Dois tipos de mostra a variavel: ex: Meu nome é: Juliana
    echo "O nome é: $nome";
    echo "<br>";
    echo "O nome é: ". $nome;

    //Uso das aspas duplas e aspas simples
    echo "<br>";
    echo $nome; // Mostra o nome
    echo "<br>";
    echo '$nome'; // É só string, não mostra valor(nome)
    echo "<br>";

    

?>