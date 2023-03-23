<?php 

$sala = 4000;
$inss = 0;
$ir = 0;
$op = 3;
$grupo = 0;

echo "O salário bruto é de R$".$sala;

if ($sala <= 1212) {
	$inss = $sala * 0.075;
}
elseif ($sala <= 2427.35) {
 	$inss = $sala * 0.09;
 } 
 elseif ($sala <= 3641.03) {
 	$inss = $sala * 0.12;
 }
 elseif ($sala <= 7087.22) {
 	$inss = $sala * 0.14;
 }
 else {
 	$inss = $sala * 0.14;
 }


if ($sala <=1903.98) {
	$ir = 0;
}
elseif ($sala >= 1903 &&  $sala < 2826.65) {
	$ir = $sala * 0.075;
}
elseif ($sala >= 2826.66 && $sala < 3751.05) {
 	$ir = $sala * 0.15;
 } 
 elseif ($sala >= 3571.06 &&  $sala < 4664.68) {
 	$ir = $sala * 0.225;
 }
 else  {
 	$ir = $sala * 0.275;
 }



echo "</br> O desconto do INSS foi R$".$inss;
echo "</br> O desconto do IR foi R$".$ir;

switch ($op) {
	case '1':
		$grupo = $sala * 0.15;
		echo "</br> Grupo A, o desconto foi de R$".$grupo;
		break;
	
	case '2':
		$grupo = $sala * 0.1;
		echo "</br> Grupo B, o desconto foi de R$".$grupo;
		break;

	case '3':
		$grupo = $sala * 0.05;
		echo "</br> Grupo C, o desconto foi de R$".$grupo;
		break;	
	default:
		echo "</br> Não escolheu nenhuma cooperativa";
		break;
}

$sala = $sala - $inss;
$sala = $sala - $ir;
$sala = $sala - $grupo;


echo "</br> Seu salário líquido é R$".$sala;

?>