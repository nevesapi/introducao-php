<?php
	$curso = readline("Informe o nome do curso: ");
	$cargaHoraria = readline("Informe a carga horária do curso de " .$curso.": ");
	
	$faltaPermitidas = $cargaHoraria * 0.25;
	
	echo "Curso: " .$curso; 
	echo "Carga horária: " .$cargaHoraria ."h"; 
	echo "Limite de faltas: " .$faltaPermitidas ."h"; 

	