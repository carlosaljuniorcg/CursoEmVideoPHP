<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores aritméticos</title>
    <style>
        h2 {
        font: 15pt Arial; /*Usado para definir tamanho e fonte*/
        color: blue; /*Usado para definir a cor da fonte */
        font-weight: bold; /*Usado para deixar a fonte em negrito */
        }       
    </style>
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = "3";
        $r1 = ($a == $b)?"Sim":"Não";
        $r2 = ($a === $b)?"Sim":"Não";
        echo "As veriaveis A e B são iguais? $r1";
        echo "<br/>As variaveis A e B são idênticas? $r2"

        
    ?>
</div>    
</body>
</html>