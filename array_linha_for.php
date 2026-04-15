<?php 
	
	$nomes = array("Maria", "Miguel", "Matheus", "Arnaldo", "Silvia");

	for($i=0; $i<=4; $i++){
		echo($nomes[$i] . "<br>");
	}

	$nomes2 = array();

	for ($i=0; $i < 5; $i++) { 
		$nomes[$i] = "Etecia";
	}

	var_dump($nomes2);

	for ($i=0; $i < 5; $i++) { 
		echo $nomes[$i] . "<br>";
	}
 ?>