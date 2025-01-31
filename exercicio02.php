<?php

echo "\nBem vindo a Amazon\n";
echo "\nOpções disponíveis: \n\n";
echo "1 -> Informações \n";
echo "2 -> Reclamações \n";
echo "3 -> Elogios \n";
echo "4 -> Status \n";
echo "\n\n";

$opcao = readline("Digite uma opção: ");

switch($opcao){
	case 1:
		$acao = "Legal, o que deseja saber?";
		break;
	case 2:
		$acao = "Poxa, que pena... o que houve?";
		break;
	case 3:
		$acao = "Bacana, pode falar!";
		break;
	case 4:
		$acao = "Ok, um momento...";
		break;
	default:
		$acao = "Não entendi...Vou chamar um atendente!";
		break;
}

echo $acao;