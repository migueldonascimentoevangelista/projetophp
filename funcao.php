<?php 
	
	// Função sem parametro
	
	$nome = "Armandino"; 

	function exibir(){
		$nome = "Josefina";

		echo "Valor da variável dentro da função ".$nome;
	}

	exibir(); 
	echo "<br/> Valor da variável fora da função ".$nome;


	// Função com parametro

	function imprimirNome($nome){
		echo "<br />Olá $nome";
	}

	imprimirNome("Etecia");


	// Função de somar
	function somar($num1, $num2){
		return ($num1 + $num2);
	}

	$resultado = somar(10,20);
	echo "<br/>O resultado da soma é " . $resultado;
	echo "<br/>O resultado da soma é " . somar(10,20) + somar(10,20);

 ?>