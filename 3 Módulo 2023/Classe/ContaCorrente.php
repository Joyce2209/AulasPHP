<?php 

	class ContaCorrente extends Conta{
		var $limite;

		//Método construtoe (sobrescrito) agora, também inicializa a variável $Limite
		function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $limite)
		{
			//Chamando o método construtor da classe-pai
			parent:: __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
			$this->limite = $limite;
		}
		//Método retirar (sobrescrito) verifica a $quantia
		//Retirada esá dentro do limite
		function Retirar($quantia){
			//imposto sobre movimentação financeira
			$cpmf = 0.05;

			if (($this->saldo + $this->limite) >= $quantia)  {
				//Executa método da classe-pai
					parent::retirar($quantia);
					//Debita o imposto
					parent::retirar($quantia * $cpmf);
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