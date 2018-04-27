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
	
	
	
	
	
?>
