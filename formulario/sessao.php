<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página WEB - Sessão de Usuário</title>
</head>
<body>
	<?php 

		session_start();

		$_SESSION['nome'] = "Administrador";

		//Elimina todas as variáveis de sessão mas, mantém a sessão ativa.
		session_unset();

		//Elimina toda a sessão
		//session_destroy();

	?>
	<h3>Sessão do Usuário</h3>
	Bem Vindo, Sr. <?php echo $_SESSION['nome']; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página WEB - Sessão de Usuário</title>
</head>
<body>
	<h3>Sessão de Usuário</h3>
	<!--ID da Sessão -->
	SID desta sessão é: <?php echo session_id(); ?>
	<br> <br>
</body>
</html>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bloqueando páginas por sessão</title>
</head>
<body>
	<form name="logar" method="post" action="sessoes_bloqueando.php">
		Nome: <br>
		<input type="text" name="nome"> <br>
		Senha: <br>
		<input type="password" name="senha"> <br>
		<br>
		<br>
		<input type="submit" name="enviar" value="Enviar">
	</form>
</body>
</html>