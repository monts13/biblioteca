<?php
	if (isset($_POST['enviar'])){
		include_once("controller/LoginController.class.php");
		$controle  = new LoginController();
		
		$controle->logar($_POST);
	}
?>
<!DOCTYPE html>

<html>
<head>
		<title> login teste   </title>
		<meta charset="utf-8">	</meta>
		<link rel="stylesheet"href="bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/estilo.css"/>
		<link rel="shortcut icon" href="caminhodoarquivo/favicon.ico" />
</head>
	<body>
	
	

    </ol>
		<div class="container">
			<button class="btn btn-info pull-right btn-cadastrar">cadastrar</button>	
	          
				<div class="formulario">
					<form method="POST">	
						<div class="form-group">
							<label for="login">Login  </label>
							<input type="text" name="login" id="login" placeholder="Digite seu e-mail" class="form-control">
						</div>
						<div class="form-group">
							<label for="senha">Senha  </label>
							<input type="password" name="senha" id="senha"			placeholder="Digite a sua senha" class="form-control">
						</div>
						<div id="botao-login">
							<button class="btn btn-success" name="enviar" type="submit"> Login </button>
						</div>
													<a>esqueçeu a senha ?</a>

					</form>
				</div>
					</div>
				
										
									

				</form>
		</div>
	</body>
</html>