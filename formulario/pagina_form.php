<?php 

echo "<h3>Recuperando os dados - Post </h3>";
$nome = $_POST['nome'];
$senha = $_POST['senha'];


echo "<b>Nome: </b>".$nome;
echo "</br>";
echo "<b>Senha: </b>".$senha;
echo "</br>";

echo "<h3>Recuperando os dados - Post </h3>";
if (isset($_POST['asp'])) {
	echo "ASP: ".$_POST['asp'];
	echo "</br>";
}
if (isset($_POST['php'])) {
	echo "PHP: ".$_POST['php'];
	echo "</br>";
}
if (isset($_POST['java'])) {
	echo "JAVA: ".$_POST['java'];
	echo "</br>";
}

echo "<h3>Recuperando os dados - Post </h3>";
if (isset($_POST['estado_civil'])) {
	echo $_POST['estado_civil'];
}

echo "<h3>Recuperando os dados - Post </h3>";
echo "Olá, usuário <b>".$_POST['user']."</b> você possui o ".$_POST['nivel']."º nível de acesso.";


echo "<h3>Recuperando os dados - Post </h3>";
echo "<b>Estado (sigla): </b>".$_POST['estados'];

echo "<h3>Recuperando os dados - Post </h3>";
echo "<b>Mensagem: </b><br>".$_POST['mensagem'];
?>