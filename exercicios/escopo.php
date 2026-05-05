<?php 

	$nome = "Gustavo"; //variavel local no script

	//implemenatçao de uma funçao

	function exibir(){
		$nome = "Josefina"; // variavel local na funçao

		echo "Valor da variavel dentro da funçao ".$nome;
	}

	exibir(); //chamada da funçao

	echo "<br/> Valor da variavel fora da funçao ".$nome;

 ?>