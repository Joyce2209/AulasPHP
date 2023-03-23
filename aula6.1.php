<?php

function exibir(){
	STATIC $ano; //Definindo variável estática
	$ano++;
	echo "</br>".$ano;

}

echo exibir();
echo exibir();
echo exibir();

echo "</br>"

?>

<?php 

echo "</br> Olá Seja Bem Vindo".$_SERVER['REMOTE_ADDR']."</br>";
echo "Vôce está utilizando o navegador: ".$_SERVER['HTTP_USER_AGENT']."</br>";

?>

<?php

define("PI", 3.14);
define("DISC", "Matemática");

echo "</br> Valor de PI: ".PI;
echo "</br> Disciplina: ".DISC;

?>


<?php 



?>

