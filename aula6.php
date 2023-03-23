<?php 

$ano = 2022;

function exibir(){
	GLOBAL $ano; //Definição da variável global
	$ano++;
	return $ano;
}

echo "</br> Ano: ".$ano;
echo "</br> Ano: ".exibir();
echo "</br> Ano: ".exibir();
echo "</br> Ano: ".$ano;

?>

