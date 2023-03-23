<?php 

//Criando conexão com banco de dados

$con = mysqli_connect("localhost","root","");

//Checando a conexão

if (mysqli_connect_errno()){
	echo "Erro ao conectar com a base de dados: ".

	mysqli_connect_error();

} else {

$sql= "CREATE DATABASE db_2HPW2";
	if (mysqli_query($con, $sql)){
		echo "Banco de Dados criado com sucesso";
	}else{
		echo"<br>ERROR: " .mysqli_error($con);
	}

	echo "Conexão aberta";

mysqli_close($con);
echo "<br>Conexão fechada";
}



?>