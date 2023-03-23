<?php 

$operador = 4;
$num1 = 10;
$num2 = 0;
$result = 0;
$operacao = " ";

switch ($operador) {
	case '1': $result = somaValor($num1 , $num2);
	$operacao = "soma";
	break;
	
	case '2' : $result = subtraValor($num1 , $num2);
	$operacao = "Subtração";
	break;
	
	case '3' : $result = multiValor($num1 , $num2);
	$operacao = "Multiplicação";
	break;
	
	case '4' :$result = divValor($num1 , $num2);
	$operacao = "Divisão";
	break;
	
	default: echo "Saindo";
	break;
}

echo "O resultado da ". $operacao. " é ". $result;

function somaValor($num1 , $num2){
	return ($num1 + $num2);
}

function subtraValor($num1 , $num2){
	return ($num1 - $num2);
}

function multiValor($num1 , $num2){
	return ($num1 * $num2);
}

function divValor($num1 , $num2){
	if ($num2 ==0){
		echo "Inexistente";
	}
	else{
		return ($num1 / $num2);
	}
	
}
?>