<?php 
	$user_num1 = 10;
	$user_num2 = 0;
	$op = 4;
	
	function soma($num1, $num2){
		return($num1 + $num2);
	}

	function subtracao($num1, $num2){
		return($num1 - $num2);
	}

	function multiplicacao($num1, $num2){
		return($num1 * $num2);
	}

	function divisao($num1, $num){
		return($num1 / $num2);
	}

	switch ($op) {

		case 1: 
		$soma = soma($user_num1, $user_num2);
		echo "A soma é igua a " . $soma;
		break;

		case 2: 
		$subtracao = subtracao($user_num1, $user_num2);
		echo "A subtração é igua a " . $subtracao;
		break;

		case 3: 
		$multiplicacao = divisao($user_num1, $user_num2);
		echo "A multiplicação é igua a " . $multiplicacao;
		break;

		case 4: if ($user_num2 != 0){
			$divisao = divisao($user_num1, $user_num2);
			echo "A divsão é igua a " . $divisao;
		}else{
			echo "Dividendo não pode ser igual a 0";
		}
		break; 
	}

 ?>