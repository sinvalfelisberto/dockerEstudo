<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>

<?php
    function calcularIMC(){
        $altura = str_replace(".", "", str_replace(",", "", $_REQUEST['altura']));
        $peso = $_REQUEST['peso'];
        $altura = $altura / 100;
        $imc = ($peso / ($altura * $altura));
    
        return number_format($imc, 2);
    }
    ?>
    <h1>Seu IMC é: <?= calcularIMC() ?></h1>
</body>
</html>