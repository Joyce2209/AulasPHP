<?php 

$n1 = 700;
$n2 = 50;
$n3 = 500;

if ($n3 > $n1 && $n3 > $n2) {
	echo $n3. "</br>";
	if ($n2 > $n1) {
		echo $n2. "</br>";
		echo $n1. "</br>";
	}
	elseif ($n1 > $n2) {
		echo $n1. "</br>";
		echo $n2. "</br>";
	}
}
elseif ($n2 > $n1 && $n2 > $n3) {
	echo $n2. "</br>";
	if ($n3 > $n1) {
		echo $n3. "</br>";
		echo $n1. "</br>";
	}
	elseif ($n1 > $n3) {
		echo $n1. "</br>";
		echo $n3. "</br>";
	}
}
elseif ($n1 > $n2 && $n1 > $n3) {
	echo $n1. "</br>";
	if ($n2 > $n3) {
		echo $n2. "</br>";
		echo $n3. "</br>";
	}
	elseif ($n3 > $n2) {
		echo $n3. "</br>";
		echo $n2. "</br>";
	}
}

?>