<?php 

$num1 = array(10,20,30,40);

$num2 = array(50,60,70,80);

$resultado = array();

	for ($i=0; $i < count($num1); $i++) { 
		$resultado[$i] = $num1[$i] + $num2[$i];
	}

	for ($i=0; $i < count($num1); $i++) { 
		echo "$resultado[$i] <br>";
	}

	echo "====================<br>";

	



 ?>