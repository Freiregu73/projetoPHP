<?php


function somar($num1,$num2){
	return $num1+$num2;
};

function subtrair($num1,$num2){
	return $num1-$num2;
};

function multiplicar($num1,$num2){
	return $num1*$num2;
};

function dividir($num1,$num2){
	return $num1/$num2;
};

$op = 4;
$num1 = 10;
$num2 = 5;

switch ($op) {
	case 1: somar($num1,$num2);
		$nomeOp= "soma";
		$resp = somar($num1,$num2);
		break;

	case 2: subtrair($num1,$num2);
		$nomeOp= "subtração";
		$resp = subtrair($num1,$num2);
		break;

	case 3: multiplicar($num1,$num2);
		$nomeOp= "multiplicação";
		$resp = multiplicar($num1,$num2);
		break;

	case 4: if ($num1!= 0) {
		dividir($num1,$num2);
		$nomeOp = "divisão";
		$resp = dividir($num1,$num2);
	} else{
		$nomeOp = "operação é invalida";
		$resp = "impssivel divisão por 0";
	}
		break;
	
	default: echo("Sair");
		break;
};

	echo "A $nomeOp do $num1 e $num2 = $resp";

 ?>