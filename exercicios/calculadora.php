<?php 

$op = 4;
$num1 = 0;
$num2 = 5;


switch ($op) {
	case 1: $resp = $num1 + $num2;
		$nomeOp= "soma";
		break;

	case 2: $resp = $num1 - $num2;
		$nomeOp= "subtração";
		break;

	case 3: $resp = $num1 * $num2;
		$nomeOp= "multiplicação";
		break;

	case 4: if ($num1!= 0) {
		$resp = $num1 / $num2;
		$nomeOp = "divisão";
	} else{
		$nomeOp = "operação é invalida";
		$resp = "impssivel divisão por 0";
	}
		break;
	
	default: echo("Sair");
		break;
}

	echo "A $nomeOp do $num1 e $num2 = $resp";

 ?>

