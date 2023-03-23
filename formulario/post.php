<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário Recuperando Dados - Post</title>
</head>
<body>
	<h2>Formulário Recuperando Dados - Post</h2>

	<form name="cadastro" method="post" action="pagina_form.php">
		Login:
		<input type="text" name="nome"> <br> <br>
		Senha:
		<input type="password" name="senha"> <br> <br>
		<input type="submit" name="ENVIAR">

	</form>

	<br> <br> <br>

	<form name="cadastro" method="post" action="pagina_form.php">
		
		Qual linguagem de progaramção você conhece? <br>
		<input type="checkbox" name="asp" value="Sim, você escolheu asp"> ASP <br>
		<input type="checkbox" name="php" value="Selecionado"> PHP <br>
		<input type="checkbox" name="java" value="Java"> JAVA <br>
		<input type="submit" name="ENVIAR">
	</form>

	<br> <br> <br>

	<form name="cadastro" method="post" action="pagina_form.php">
		Estado Civil <br>

		<input type="radio" name="estado_civil" value="Casado"> Casado  <br>
		<input type="radio" name="estado_civil" value="Solteiro"> Solteiro  <br>
		<input type="submit" name="ENVIAR">

	</form>

	<br> <br> <br>

	<form name="cadastro" method="post" action="pagina_form.php">
		Enviando dados ocultos 

		<input type="hidden" name="user" value="admin"> 
		<input type="hidden" name="nivel" value="2"> 
		<input type="submit" name="ENVIAR">

	</form>

	<br> <br> <br>

	<form name="cadastro" method="post" action="pagina_form.php">
		Estados:
		<select name="estados">
			<option value="SP"> São Paulo </option>
			<option value="RJ"> Rio de Janeiro </option>
			<option value="MG"> MInas Gerais </option>
			<option value="BA"> Bahia </option>
		</select> <br> <br>
		<input type="submit" name="ENVIAR">

	</form>

	<br> <br> <br>

	<form name="cadastro" method="post" action="pagina_form.php">
		Mensagem: <br>
		<textarea name="mensagem" cols="80" rows="7">
		</textarea>	
		<br> <br>
		<input type="submit" name="ENVIAR">

	</form>
</body>
</html>