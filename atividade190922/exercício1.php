<?php 

$n1 = 10;
$n2 = 10;
$result = 0;

$result = $n1 + $n2;

if ($result > 20) {
	$result = $result + 8;
}

elseif ($result <= 20) {
	$result = $result - 5;
}

echo $result;

?>