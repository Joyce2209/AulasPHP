<?php 

class ContaPoupanca extends Conta{
		var $aniversario;

		//Método construtoe (sobrescrito) agora, também inicializa a variável $Aniversário
		function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $aniversario)
		{
			//Chamando o método construtor da classe-pai
			parent:: __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
			$this->aniversario = $aniversario;
		}
		//Método retirar (sobrescrito) verifica se há saldo para retirar tal $quantia
		function Retirar($quantia){
			if ($this->saldo  >= $quantia)  {
				//Executa método da classe-pai
					parent::retirar($quantia);
			}
			else {
				echo "<br>Retirada não permitida ... <br>";
				return false;
			}
			//retirada permitida
			return true;
		}
	}

?>