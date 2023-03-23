<?php 

$n = 0;

while ($n <= 10) {

	echo "</br> " .$n;
	$n++;
}

echo "</br>";

$nomes = array('João','José','Paulo','Pedro');

foreach ($nomes as $item) {
	
	echo "</br>".$item;

}

echo "</br>";

$x=0;
while ($x < 100){

	echo "</br>".$x;
	if ($x == 10)
		break;
		$x++;
}

echo "</br>";

for ($x1=1; $x1 < 100 ; $x1++) { 
	if ($x1 == 10)
		goto desvio;

	echo "</br>".$x1;
}

desvio:
echo "</br> Pronto, aqui está o desvio.";

?>


<?php 

echo "</br>";
 
for ($x2=1; $x2 <= 50 ; $x2++) { 
	if ($x2 % 2 == 0) {

		continue;
	}
	echo "</br>".$x2;
}

?>