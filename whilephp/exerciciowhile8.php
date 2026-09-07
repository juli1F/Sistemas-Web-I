<?php

$senha_certa = "1234";

while (true) {
    
    $digito = readline("Digite a senha: 1235");
    
   
    if ($digito == $senha_certa) {
        echo "Acesso permitido\n";
        break;
    } else {
        echo "Errou! Tente de novo.\n";
        break;
    }
}
?>