<!DOCTYPE html>
<html>
	<body>

		<p>Exemplo declaração de variável sem array</p>

		<?php 

			$nome1 = "Maria";
			$nome2 = "João";
			$nome3 = "Pedro";
			$nome4 = "Paulo";
			$nome5 = "Lucas";

			echo("$nome1</br>$nome2</br>$nome3</br>$nome4</br>$nome5</br>");

		?>

		<p>Exemplo declaração de variável com array</p>

		<?php 	

			$nome = array("Maria","João","Pedro","Paulo","Lucas");

			echo "Os nomes do array</br>";

			foreach ($nome as $nomes) {

				echo "</br>".$nomes;
			}	

		?>

		<?php 

			$salarios = array("João" => 2000, "Pedro" => 1000, "Maria" => 500);
			echo "</br>Salário de João é ". $salarios['João']. "<br/ >";
			echo "Salário de Pedro é ". $salarios['Pedro']. "<br/ >";
			echo "Salário de Maria é ". $salarios['Maria']. "<br/ >";

			$salarios['João'] = "Alto";
			$salarios['Pedro'] = "Médio";
			$salarios['Maria'] = "Baixo";

			echo "</br>Salário de João é ". $salarios['João']. "<br/ >";
			echo "Salário de Pedro é ". $salarios['Pedro']. "<br/ >";
			echo "Salário de Maria é ". $salarios['Maria']. "<br/ >";

		?>


		<?php 

			$texto = "micro computador";
			
			$tamanho = strlen($texto);

			echo "</br>".$texto. " possui ". $tamanho. " caracteres";

			echo "</br>".strtoupper($texto);

			echo "</br>".strtolower($texto);

			echo "</br>".ucfirst($texto);

			echo "</br>".ucwords($texto);

			echo "</br>".substr($texto,13,3);

			echo "</br>".str_replace("micro", "Nano", $texto);

		?>

		<?php 

		$dataAtual = date("d/m/y");

		echo "</br> A data de hoje é: ".$dataAtual. "</br>";

		$hora = date("h:i:s");

		echo "</br> Agora são: ".$hora. "</br>";

		$dataHora = date("d/m/y h:i:s");

		echo "</br> Data e hora: ".$dataHora. "</br>";

		?>




	</body>
</html>


