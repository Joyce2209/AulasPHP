<?php 
	
	include_once 'conta.php';
	include_once 'pessoa.php';

	$conta_carlos = new Conta;
	$conta_carlos->Agencia = 6677;
	$conta_carlos->Codigo = "CC.12 34. 56";
	$conta_carlos->DataDeCriacao = "10/07/02";
	$conta_carlos->Titular = $carlos;
	$conta_carlos->Senha = 9876;
	$conta_carlos->Saldo = 567.89;
	$conta_carlos->Cancelada = false;

	echo "\n";
	echo "Manipulando a conta de: {$conta_carlos->Titular->nome} \n";
	echo "O saldo atual é R\$  {$conta_carlos->obterSaldo()} \n";

	$conta_carlos->Depositar(20);
	echo "O saldo atual é R\$  {$conta_carlos->obterSaldo()} \n";

	$conta_carlos->Retirar(10);
	echo "O saldo atual é R\$  {$conta_carlos->obterSaldo()} \n";

?>