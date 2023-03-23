<?php 

	class Conta
	{
		var $agencia;
		var $codigo;
		var $dataDeCriacao;
		var $titular;
		var $senha;
		var $saldo;
		var $cancelada;

		//Diminui o saldo em quantia
		function retirar($quantia){
			if ($quantia > 0) {
				$this->saldo -= $quantia;
			}
		}

		//Aumenta o saldo em quantia
		function depositar($quantia){
			if ($quantia > 0) {
				$this->saldo += $quantia;
			}
		}

		//Retorna o saldo atual
		function obterSaldo(){
			return $this->saldo;
		}

		//Método construtor inicializa propriedades

		function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada)
		{
			$this->agencia = $agencia;
			$this->codigo = $codigo;
			$this->dataDeCriacao = $dataDeCriacao;
			$this->titular = $titular;
			$this->senha = $senha;

			//Chama a outor método da classe
			$this->depositar($saldo);
			$this->cancelada = false;
		}

		//Método destrutor finaliza objeto

		function __destruct(){
			echo "<br>Objeto Conta {$this->codigo} de {$this->titular->nome} finalizada ... <br>";
		}
	}

?>