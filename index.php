<?php
$ht=160; //horas trabalhadas
$vh=20;  // valor da hora de trabalho

$pd = 10; // percentual de desconto

$sb= $ht*$vh; // cálculo do salário bruto

$td= ($pd/100)*$sb; //total de desconto 

$sl= $sb - $td; //cálculo do salário líquido

echo("O valor do salário bruto é de: R$".$sb);


echo("<br><br>O valor do desconto total é de: R$".$td);

echo("<br><br>O valor do salário líquido é de: R$".$sl);
?>