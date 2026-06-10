<?php 
	$host = "localhost";
	$user = "user_dbloja";
	$pwd = "123456";
	$db = "dbLoja";

	$con = mysqli_connect($host, $user, $pwd, $db);

	if (mysqli_connect_errno()) {
		echo "Erro ao conectar a base de dados" . mysqli_connect_error();
	}else{
		echo "Banco de dados conectado com sucesso";
		$sql = "insert into tbPessoa(nome,email)values('Etecia','sac@etecia.com')"; 
		mysqli_query($con,$sql);		

		mysqli_close($con);
	}
?>