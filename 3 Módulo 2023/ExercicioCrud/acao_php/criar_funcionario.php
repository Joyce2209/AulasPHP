<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$cpf = mysqli_escape_string($connection,$_POST['cpf']);
		$telefone = mysqli_escape_string($connection,$_POST['telefone']);
		$email = mysqli_escape_string($connection,$_POST['email']);

		$sql = "INSERT INTO Funcionarios(NomeFuncio,CPFFuncio,TelefoneFuncio,EmailFuncio)VALUES('$nome','$cpf','$telefone','$email')";

		if (mysqli_query($connection, $sql)) {
			$_SESSION['mensagem'] = "Cadastrado com sucesso";

			header('Location: ../index.php');
		}
		else{
			
			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}

?>