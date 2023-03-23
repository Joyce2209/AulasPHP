
<!DOCTYPE html>
<html>
<?php 
	#Testando comentário de Hash Marks  
	#Etec Irmã Agostina
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP - Testando Comentários</title>
</head>
<body>
	<?php

		/* Este é um comentário
		de múltiplas linhas.
		*/
		echo "Segundo exemplo de PHP";
		$data = "15 de Agosto de 2022";

		//Este é um comentário de apenas uma linha
	?>
	<p>Este parágrafo está sendo interpretado como HTML</p>
	Arquivo criado em <?php echo $data ?>

</body>
</html>
<?php  ?>