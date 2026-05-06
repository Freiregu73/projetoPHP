<?php 

	$nome = $_POST['nome'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];

	$peso = (float)$peso;
	$altura = (float)$altura;

	$imc = $peso / ($altura*$altura);

	$classificacao ="";

	if ($imc < 19 ) {
		$classificacao = "Abaixo do peso!";
	} else if($imc < 25){
		$classificacao = "Peso ideal";
	}else if($imc < 30){
		$classificacao = "Sobrepeso";
	}else if($imc < 35){
		$classificacao = "Obesidade grau 1";
	}else if($imc < 40){
		$classificacao = "Obesidade grau 2";
	}else{
		$classificacao = "Obesidade grau 3";
	};

	echo "Óla $nome, <br> Seu peso é de: $peso KG. <br> Sua altura é de: $altura m. <br> Sua classificação é: $classificacao <br>";
	printf("Sua taxa do IMC é igual a: %.2f", $imc);



	


 ?>