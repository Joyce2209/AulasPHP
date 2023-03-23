<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$cpf = mysqli_escape_string($connection,$_POST['cpf']);
		$telefone = mysqli_escape_string($connection,$_POST['telefone']);
		$email = mysqli_escape_string($connection,$_POST['email']);
		$codFuncio = mysqli_escape_string($connection,$_POST['codFuncio']);

		$sql = "UPDATE Funcionarios SET nomeFuncio = '$nome', CPFFuncio = '$cpf', TelefoneFuncio = '$telefone', emailCli = '$email' WHERE codFuncio = '$codFuncio'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}

?>