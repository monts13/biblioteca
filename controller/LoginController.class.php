<?php
	include_once("model/Usuario.class.php");
	include_once("dao/DaoUsuario.class.php");
	class LoginController{
		

		public function logar($post){
			$dao = new DaoUsuario();
			$usuario = $dao->buscarUsuarioPorLogin($post['login']);
            if (is_null ($usuario->getIdUsuario())) {
            	echo"usuario não encontrado";
            } else{
            	if ($usuario->getSenha()== $post['senha']){
            		//Criar a variavel sessao
            		session_start();

            		$_SESSION['nome'] 	= $usuario->getNome();
            		$_SESSION['codigo'] = $usuario->getIdUsuario();
            		$_SESSION['logado'] = true;

            		header("location: inicio.php");
            	} else{
            		echo "senha incorreta";
            	}
            }
		}
		public function cadastro($post){
			$dao = new DaoUsuario();
			$usuario = $this->transformaDadosDoFormularioEmObjeto($post);
			$dao->salvarUsuario($usuario);
		}


		public function verificaLogado(){
			session_start();

			if($_SESSION['logado'] != true){
				unset($_SESSION);
				header("location: index.php?erro=true&msg=Usuário não autorizado");
			}
		}

		public function transformaDadosDoFormularioEmObjeto($dadosDoForm){
			$usuario = new Usuario();
			$usuario->setNome($dadosDoForm['cnome']);
			$usuario->setLogin($dadosDoForm['clogin']);
			$usuario->setSenha($dadosDoForm['csenha']);
			return $usuario;
		}

	}
		session_start(); 

		unset($_SESSION['nome']);
		unset($_SESSION['codigo']);
		header("location: index.php");
?>
