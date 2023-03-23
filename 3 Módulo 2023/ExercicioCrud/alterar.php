<?php 
	include_once 'acao_php/conexao_bd.php';
	//cabeçalho
	include_once 'include/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbClientes WHERE codCli = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

	}

?>
<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Funcionários</h3>
			
			<form action="acao_php/alterar_funcionarios.php" method="POST">

				<input type="hidden" name = "codFuncio" value="<?php echo $dados['codFuncio']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['NomeFuncio']; ?>">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="cpf" id="cpf" value="<?php echo $dados['CPFFuncio']; ?>"
					>
					<label for="cpf">CPF</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="telefone" id="telefone" value="<?php echo $dados['TelefoneFuncio']; ?>">
					<label for="telefone">Telefone</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="email" id="email" value="<?php echo $dados['EmailFuncio']; ?>">
					<label for="email">E-mail</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de Funcionários</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'include/footer.php';


 ?>