<?php 
	
	class Produto 
	{
		var $Codigo;
		var $Descricao;
		var $Preco;
		var $Quantidade;
		var $Porcentagem;

		function imprimeEtiqueta(){
			print 'Codigo: '. $this->Codigo. "<br>";
			print 'Descrição: '. $this->Descricao. "<br>";
		}

		function Desconto(){
			print 'Codigo: '. $this->Codigo. "<br>";
			print 'Descrição: '. $this->Descricao. "<br>";
			print 'Porcentagem de Desconto: '. $this->Porcentagem. "%<br>";
			print 'Valor do Produto: R$ '. $this->Preco. "<br>";
			print 'Valor total com desconto: R$ '. $this->Preco - ( $this->Preco * $this->Porcentagem / 100). "<br>";
			print 'Quantidade: '. $this->Quantidade. "<br>";
		}

	}

?>