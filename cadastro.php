<?php 
	$host = "localhost";
	$user = "user_dbloja";
	$pwd = "123456";
	$db = "dbLoja";

	$con = mysqli_connect($host, $user, $pwd, $db);

	if (mysqli_connect_errno()) {
			echo "Erro ao conectar a base de dados" . mysqli_connect_error();
		}else{
		$sql = "insert into tbPessoa(nome,email)values('$_POST[nome]','$_POST[email]')";

		mysqli_query($con,$sql);
		
		echo "Cadastrado com sucesso";

		mysqli_close($con);
		}

 ?>