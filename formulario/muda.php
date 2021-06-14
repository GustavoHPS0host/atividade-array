<?php
$nome = filter_input(INPUT_POST,'nome');
$idade = filter_input(INPUT_POST,'idade');
$educacao = filter_input(INPUT_POST,'educacao');
$seguranca = filter_input(INPUT_POST,'seguranca');
$saude = filter_input(INPUT_POST,'saude');
$opiniao = filter_input(INPUT_POST,'opiniao');

$media = ($educacao + $seguranca + $saude)/3;

 
echo("Nome: $nome</br>");
echo("Idade: $idade</br>");
echo("Educação: $educacao</br>");
echo("Segurança: $seguranca</br>");
echo("Saúde: $saude</br>");
echo("Média: $media</br>");
echo("Opinião: $opiniao");


?>