<?php 
	

	$sal = 3500;
	

	if (sal <= 2428.00) {
		$porcent =0;
	}elseif (sal >2428.00 && <= 2826.65) {
		$porcent = 0.075;
	}elseif (sal > 2826.65 && <= 3751.05) {
		$porcent = 0.15;
	}elseif (sal > 3751.05 && <= 4664.68) {
		$porcent = 0.225;
	}elseif (sal > 4664) {
		$porcent = 0.275;
	}
	
	

	echo "Salário Bruto: R$ $sal";
	echo "Porcentagem de desconto:". $porcent * 100"%";
	echo "Valor do desconto:". $sal * $porcent;
	echo "Salário liquido". $sal - ($sal * $porcent);





 ?>