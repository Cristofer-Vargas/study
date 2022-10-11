<?php

$a = "Cristofer";
$b = " Vargas " . "de" . " Santis";
$nome_completo = "$a $b";

echo "<h1>$nome_completo</h1>";

$texto = <<<LABEL
Olá bom dia sr. $nome_completo
de nome, $a
e sobrenome, $b
LABEL;

echo $texto;