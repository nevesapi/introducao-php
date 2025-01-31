<?php

echo "\nBem vindo a Amazon\n";
echo "\nOpções disponíveis: \n\n";
echo "1 -> Informações \n";
echo "2 -> Reclamações \n";
echo "3 -> Elogios \n";
echo "4 -> Status \n";
echo "\n\n";

$opcao = readline("Digite uma opção: ");

if($opcao == 1){
	$acao = "Mais infomações... \n";
}elseif($opcao == 2){
	$acao = "Muitas reclamações... \n";
}elseif($opcao == 3){
	$acao = "Ragas ceda elogiando... \n";
}elseif($opcao == 4){
	$acao = "Statusando \n";
}else{
	$acao = "Opção inválida, tente novamente!";
}

echo $acao;



	

