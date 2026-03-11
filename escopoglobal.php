<?php 

	$ano=2020;

	//implementaçao de uma funçao

	function exibir(){
		STATIC $ano; //definiçao da variavel global
		$ano++;
		return $ano;
	}

	echo "</br> Ano: ".$ano;
	echo "<br/> Ano: ".exibir();
	echo "<br/> Ano: ".exibir();
	echo "<br/> Ano: ".$ano;

 ?>