<?php
	if (isset($_POST['enviar'])){
		include_once("controller/LoginController.class.php");
		$controle  = new LoginController();
		
		$controle->logar($_POST);
	}

	if (isset($_POST['cadastro'])){
		include_once("controller/LoginController.class.php");
		$controle  = new LoginController();
		
		$controle->cadastro($_POST);
	}

	
?>
<!DOCTYPE html>

<html>
<head>
		<title> Biblioteca   </title>
		<meta charset="utf-8">	</meta>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/estilo.css"/>
		<link rel="shortcut icon" href="caminhodoarquivo/favicon.ico" />
</head>
	<body>
		<?php
			if (isset($_GET['erro'])){
				$mensagemDeErro = $_GET['msg'];
		?>
	
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  			<strong>Erro!</strong> <?=$mensagemDeErro?>
		  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    			<span aria-hidden="true">&times;</span>
		  			</button>
				</div>
		<?php
			}
		?>
		<div class="container">
			<a href="cadastro.html" class="btn btn-info pull-right btn-cadastrar" data-toggle="modal" data-target="#modalCadastro">Cadastrar</a>	
	          
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
						<button class="btn btn-success btn-block" name="enviar" type="submit"> Login </button>
					</div><br>
					<div id="esqueci">
						<button class= "btn btn-danger" type="submit ">Esqueceu sua senha ?</button>
					</div>
													
				</form>
			</div>
		</div>
		<!--%%%%%%%%%%%%%%%%% INICIO DA MODAL DE CADASTRO  %%%%%%%%%%%%%%%%%%-->
		<div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastroLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Casdatre-se</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form method="POST">
						<div class="modal-body">
							<div class="form-group">
								<input type="text" name="cnome" id="nome" placeholder="Digite seu nome" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" name="clogin" id="login" placeholder="Digite seu login" class="form-control">
							</div>
							<div class="form-group">
								<input type="password" name="csenha" id="senha" placeholder="Digite sua senha" class="form-control">
							</div>
							<div class="form-group">
								<input type="password" name="csenha" id="senha" placeholder="Repita sua senha" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" name="cemail" id="email" placeholder="Digite seu e-mail" class="form-control">
							</div>
						</div>
						<div class="modal-footer">
							<input type="reset" class="btn btn-secondary" data-dismiss="modal"></input>
							<button type="submit" class="btn btn-warning" name="cadastro">Guardar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>