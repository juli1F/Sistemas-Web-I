<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <h1>Aula 02- php + html</h1>
    <?php
        $nome= "Anderson";
        echo "<p style= 'color: red;'>Bem vindo... $nome</p>";
        //Laço de repetição- contar de 1 até 5

        echo "<ul>";
        for ($i=1; $i <= 5; $i++) { 
        echo "<li> $i </li>";
        }
        echo "</ul>";
    ?>

    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
    </ul>


</body>
</html>