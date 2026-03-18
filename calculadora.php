<?php 
	$num1=10;
	$num2=0;
	$op=4;
	$nomeop;

	switch ($op) {
		case 1: $resp = $num1 + $num2;
			$nomeop="soma";
			break;

		case 2: $resp = $num1 - $num2;
			$nomeop="subtração";
			break;

		case 1: $resp = $num1 * $num2;
			$nomeop="multiplicação";
			break;

		case 1: $resp = $num1 / $num2;
			if ($num2==0) {
				$nomeop="operação é invalida"
				$resp="impossivel dividir por zero"
			}
			$nomeop="divisão";
			break;	

		default: echo ("Sair");
			break;
	}

	echo "A $nomeop de $num1 e $num2 é igual a $resp";

 ?>