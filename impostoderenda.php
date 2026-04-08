<?php 

function salarioLiquido($salarioBruto, $porcentagem){
	return $salarioBruto - ($salarioBruto * $porcentagem/ 100);
}

function valorDesconto($salarioBruto, $porcentagem){
	return ($salarioBruto * $porcentagem/ 100);
}

$salarioBruto = 2400;

if($salarioBruto < 0) {
	echo "valor invalido! <br/>";
}else if($salarioBruto<=2428.80){
	$porcentagem = 0;
	salarioLiquido($salarioBruto, $porcentagem);
}else if($salarioBruto<=2826.65){
	$porcentagem = 7.5;
	salarioLiquido($salarioBruto, $porcentagem);
}else if($salarioBruto<=3751.05){
	$porcentagem = 15;
	salarioLiquido($salarioBruto, $porcentagem);
}else if($salsarioBruto<=4664.68){
	$porcentagem = 22.5;
	salarioLiquido($salarioBruto, $porcentagem);
}else{
	$porcentagem = 27.5;
	salarioLiquido($salarioBruto, $porcentagem);
};



echo "Salario bruto: R$$salarioBruto <br/>";
echo "Porcentagem de desconto: $porcentagem% <br/>";
echo "Valor do desconto: R$" . valorDesconto($salarioBruto, $porcentagem) . "<br/>";
echo "Salario Liquido: R$" . salarioLiquido($salarioBruto, $porcentagem);


 ?>