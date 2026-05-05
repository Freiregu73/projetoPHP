<?php 

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if (isset($email) && isset($senha)) {
		echo "Existe";
	}else{
		echo "Não existe";
	};


 ?>