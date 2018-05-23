<?php 

	function getConnection() {
	$host = "localhost";
	$banco = "bd_biblioteca";
	$usuario = "root";
	$senha = "";

	try {
		$conn = new PDO("mysql:host=$host; dbname=$banco", $usuario, $senha);
		return array("conexao" => $conn, "mensagem" => "Conectado");
	} catch (PDOException $e) {
		return array("conexao" => null, "mensagem" => "Ocorreu um erro:<br>" . $e->getMessage());
	}
}

	$teste = getConnection();
	print_r($teste["mensagem"]);



	header("Content-type: text/html; charset=utf-8");
if(isset($_POST['nome']) && isset($_POST['senha']) && isset($_POST['email'])){

	require('bd_biblioteca.php');
	
	if($valida = mysqli_query($mysqli, "INSERT INTO usuarios (UsrNome, UsrSenha, UsrEmail) VALUES ('$_POST[nome]', '$_POST[senha]', '$_POST[email]')")){
			header('Location: ../cadastro.html');
		}else{
			echo "Não foi possivel criar o usuário...<br><a href='../index.html>Index</a>'";
			
		}

	
	
	
	
	
?>
