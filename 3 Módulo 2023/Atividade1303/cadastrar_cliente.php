<?php 

	session_start();

	require_once 'conexao_db.php';

	if (isset($_POST['Cadastrar'])) {
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$sobrenome = mysqli_escape_string($connection,$_POST['sobrenome']);
		$email = mysqli_escape_string($connection,$_POST['email']);
		$cpf = mysqli_escape_string($connection,$_POST['cpf']);
		$sexo = mysqli_escape_string($connection,$_POST['sexo']);
		$usuário = mysqli_escape_string($connection,$_POST['usuario']);
		$senha = mysqli_escape_string($connection,$_POST['senha']);


		$sql = "INSERT INTO Cliente(NomeCliente,SobrenomeCliente,EmailCliente,CPFCliente,SexoCLiente,UsuarioCliente,SenhaCliente)VALUES('$nome','$sobrenome','$email','$cpf','$sexo','$usuario','$senha')";

		if (mysqli_query($connection, $sql)) {
			$_SESSION['mensagem'] = "Cadastrado com sucesso";

			header('Location: formulario.php');
		}
		else{
			
			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: formulario.php');	
		}
	}

?>