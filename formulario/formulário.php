<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Cadastro</title>
</head>
<body>
	<h2>Exemplo de Formulário</h2>
	<form  name="cadastro" method="get" action="pagina_form.php">
		Nome: <input type="text" name="nome" size="40" maxlength="50"> <br> <br>
		Senha: <input type="password" name="senha"> <br> <br>
		<input type="checkbox" name="termouso" value="termo" />
		Aceito o termo de uso <br> <br>
		<input type="radio" name="sexo" value="fem"> FEMININO
		<input type="radio" name="sexo" value="mas"> MASCULINO
		<br> <br>
		Animais:
		<select name="animais">
			<option value="elef">Elefante</option>
			<option value="hipo">Hipopótamo</option>
			<option value="rino" selected="true">Rinoceronte</option>
			<option value="dino">Dinossauro</option>
		</select>
		<br> <br>
		Mensagem: <br>
		<textarea name="msg" cols="50" rows="8">
			
		</textarea>
		<br> <br>
		<input type="hidden" name="login" value="admin">
		<br>
		&nbsp; &nbsp; &nbsp;
		<input type="button" name="VOLTAR">
		&nbsp; &nbsp; &nbsp;
		<input type="reset" name="LIMPAR">
		&nbsp; &nbsp; &nbsp;
		<input type="submit" name="ENVIAR">
		&nbsp; &nbsp; &nbsp;
		<a href="#" onclick="document.cadastro.reset()">LIMPAR</a>
		<br> <br>
		<button onclick=”window.location.href=’http://www.google.com.br’ ”>
		Google </button>
		<button onclick=”window.location.reload()”> Atualizar página
		</button>
		<button onclick=”window.print()” > Imprimir </button>
		<button onclick=”window.history.back()” > Voltar</button>
		</form>
</body>
</html>