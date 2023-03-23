<?php 

	class Pessoa {

		var $codigo;
		var $nome;
		var $altura;
		var $idade;
		var $nascimento;
		var $escolaridade;
		var $salario;
		

		//Aumenta a altura em centímetros
		function crescer($centimetros){
			if ($centimetros > 0) {
				$this->altura += $centimetros;
			}
		}

		//Altera a escolaridade para a titulação
		function formar($titulacao){
			$this->escolaridade = $titulacao;
		}

		//Aumenta a idade em anos
		function envelhecer($anos){
			if ($anos > 0) {
				$this->idade += $anos;
			}
		}

		//Método construtor inicializa propriedades
		
		function __construct($codigo, $nome, $altura, $idade, $nascimento, $escolaridade, $salario)
		{
			$this->codigo = $codigo;
			$this->nome = $nome;
			$this->altura = $altura;
			$this->idade = $idade;
			$this->nascimento = $nascimento;
			$this->escolaridade = $escolaridade;
			$this->salario = $salario;
		}

		//Método destrutor finaliza objeto

		function __destruct(){
			
			echo "<br>Objeto {$this->nome} finalizado ... <br>";
		}












	}

?>