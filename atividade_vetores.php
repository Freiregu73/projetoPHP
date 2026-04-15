<?php 

$numeros = array(12,-5,0,7,-3,8,10,-1,4,6);
$negativos = 0;
$positivo =0;
$pares =0;
$impares =0;

 for ($i=0; $i < count($numeros) ; $i++) { 
 	if($numero[$i] >= 0){
 		$positivos++;
 	}else if($numero[$i] < 0){
 		$negativos++;
 	}else if ($numero[$i] %2 == 0) {
 		$pares++
 	}else{
 		$impares++
 	}


 }




 ?>