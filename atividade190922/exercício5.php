<?php 
	
	$pessoas = 0;
	$idade = 10;
	$idade2 = 5;
	$idade3 = 7;
	$idade4 = 10;
	$sexo = 1;
	$sexo2 =2; 
	$altura = 1.49;
	$altura2 = 1.50;
	$cont = 0;
	$altt = 0;
	$idadema = 0;
	$idademe = 0;

	for ($pessoas = 0; $pessoas <= 49 ; $pessoas++) 	{	
		if ($altura2 > $altura) {
			$maior = $altura2;
		}
			if ($sexo2 == 2) {
				$altt = $altura + $altt;
				$cont++;
			
			}
			if ($sexo == 1) {
				if ($idade > $idade2){
					$idadema = $idade;
				}
			if ($sexo2 == 2) {
				if ($idade3 < $idade4) {
					$idademe = $idade3;	
				}
			}	
			}
	}
	$altt = $altt / $cont;
	echo $maior. " É a maior altura e ".$altura. " é a menor </br>";
	echo $altt. " É a altura média entre as mulheres </br>";
	echo $idadema. " É a maior idade entre os homens e ". $idademe. " é a menor idade entre as mulheres";


?>