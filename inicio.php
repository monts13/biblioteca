<?php
  include_once("controller/LoginController.class.php");
  $controle  = new LoginController();
  $controle->verificaLogado();
  
?>
<!DOCTYPE html>
<html>
	<head>
		<title>cadastre-se</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/estilo.css"/>
	</head>
	<body>
		
		
		<style>
      .vertical-menu {
          width: 200px;
      }

      .vertical-menu a {
          background-color: #eee;
          color: black;
          display: block;
          padding: 12px;
          text-decoration: none;
      }

      .vertical-menu a:hover {
          background-color: #ccc;
      }

      .vertical-menu a.active {
          background-color: #0000FF;
          color: white;
      }
  </style>
</head>
<body>



<div class="vertical-menu">
  <a href="#" class="active">Home</a>
  <a href="#">drama</a>
  <a href="#">romanticos</a>
  <a href="#">religião</a>
  <a href="#">Adicionar livros</a>

</div>











		</div>
    <form>
     <input type="submit" name="sair" placeholder="Sair">
     <li><a href="#">Pagina Inicial</a></li>
     <li><a href="index.php">Sair</a></li>




    </form>
	</body>
</html>