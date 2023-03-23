<?php 
	//cabeçalho
	include_once 'include/header.php';
?>

<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo Funcionário</h3>
			
			<form action="acao_php/criar_funcionario.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="cpf" id="cpf">
					<label for="cpf">CPF</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="telefone" id="telefone">
					<label for="telefone">Telefone</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="email" id="email">
					<label for="email">E-mail</label>
				</div>

				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de Funcionários</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'include/footer.php';


 ?>