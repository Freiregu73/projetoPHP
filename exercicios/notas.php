<?php 
$nota1 = 9;
$nota2 = 8;
$media = 0;
$alunosA = 0;
$alunosR = 0;
$alunosE = 0;
$alunosT = 0;
$mediaClasse = 0;

for ($alunos=1; $alunos <= 6 ; $alunos++) { 
	echo "Aluno $alunos <br/>";
	echo "Qual as notas do aluno $alunos <br/>";
	$nota1;
	$nota2;
	echo "nota 1 : $nota1 <br/> nota 2: $nota2 <br/>";
	$media = ($nota1 + $nota2) / 2;
	echo "A média do aluno foi $media <br/>";
	$mediaClasse = $mediaClasse + $media;

	if ($media < 3) {
	 	echo "Aluno reprovado <br/>";
	 	$alunosR++;
	 }else if ($media < 7) {
	 	echo "Aluno em exame <br/>";
	 	$alunosE++;
	 }else{
	 	echo "Aluno aprovado </br>";
	 	$alunosA++;
	 }

	 $alunosT++;
	 echo "<br/>";
	}

	$mediaClasse = $mediaClasse / $alunosT;

	echo "Total alunos aprovados: $alunosA <br/>";
	echo "Total alunos em exame: $alunosE <br/>";
	echo "Total alunos reprovados: $alunosR <br/>";
	echo "Média da classe: $mediaClasse <br/>";
 ?>