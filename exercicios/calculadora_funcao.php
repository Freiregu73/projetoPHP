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
	if ($num2!= 0) {
		return $num1/$num2;
	} else{
		return "impossivel divisão por 0";
	}
	
};

$op = 4;
$num1 = 0;
$num2 = 10;

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

	case 4: dividir($num1,$num2);
		$nomeOp = "divisão";
		$resp = dividir($num1,$num2);
		break;
	
	default: echo("Sair");
		break;
};

	echo "A $nomeOp do $num1 e $num2 = $resp";

 ?>