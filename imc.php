<?php
//Variavel recebe os valores do usuário
$altura = 1.80;
$peso = 80;
//calculo imc
$imc = $peso / ($altura**2);
//condiona para a respectiva categoria
if ($imc < 18.6) {
    echo ("Abaixo do peso\n");
    echo ("Imc: $imc");
}elseif ($imc < 24.9) {
    echo ("Peso ideal\n");
    echo ("Imc: $imc");
}elseif ($imc < 29.9) {
    echo ("Sobrepeso\n");
    echo ("Imc: $imc");
}elseif ($imc < 34.9) {
    echo ("Obesidade grau 1\n");
    echo ("Imc: $imc");
}elseif ($imc < 39.9) {
    echo ("Obesidade grau 2 (Severa)\n");
    echo ("Imc: $imc");
}else{
    echo ("Obesidade grau 3 (Mórbida)\n");
    echo ("Imc: $imc");
}
?>
