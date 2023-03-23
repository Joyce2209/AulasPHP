<?php 

$n1 = 9;
$div10 = 0;
$div5 = 0;
$div2 =0;

$div10 = $n1 % 10;
$div5 = $n1 % 5;
$div2 = $n1 % 2;


if ($div10 == 0 && $div5 == 0 && $div2 == 0 ) {
	echo $n1. " É divisível por 10, 5 e 2";
}

else {
	echo $n1. " Não é divisível por 10, 5 e 2";
}

?>