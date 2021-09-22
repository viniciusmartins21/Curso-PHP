<?php

$peso = 70;
$altura = 1.74;


$imc = $peso / $altura** 2;

if ($imc < 18.5) {
    echo "seu IMC é de $imc , você esta em estado de Magreza! ";
}

else if (($imc <= 18.5) && ($imc <= 24.9)) {
    echo "seu IMC é de $imc , você esta em estado de Normal! ";
}

else if (($imc <= 25.0) && ($imc <= 29.9) ) {
    echo "seu IMC é de $imc , você esta em estado de Sobrepeso! ";
}

else if (($imc <= 30.0) && ($imc <=39.9) ) {
    echo "seu IMC é de $imc , você esta em estado de Obesidade! ";
}

else {
   echo "seu IMC é de $imc , você esta em estado de Obesidade grave!";
}