<?php 
$mesasT = 40;
$cadeirasT = 6 * $mesasT;
$cadeiras = 5;
$mesas = 1;

if ($mesasT >= 1 && $cadeirasT >=1) {
	for ($mesa = $mesasT; $mesa >= 0 ; $mesa -= $mesas) { 
	echo "Mesas reservada $mesa <br/>";
	$mesasT = $mesasT - $mesas ;
	for ($cadeira =6; $cadeira >= 0 ; $cadeira - $cadeiras) { 
		echo "Cadeiras reservadas $cadeiras <br/> ";
		$cadeirasT = $cadeirasT - $cadeiras;
	}
}
	echo "Mesas restantes: $mesasT <br/>";
	echo "Cadeiras restantes: $cadeirasT <br/>";
 ?>