<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
		<link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="h-style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<title>Perfil</title>
</head>
<body style=" background-color:#F0F8FF;">
	<header>
		<h2>Perfil</h2>
	</header>

	<div class="header_menu">Let's Meet

	<input type="checkbox" id="chk">
			<label for="chk" class="menu-icon">&#9776;</label>
			<div class="bg"></div><i class='fa fa-toggle-on' aria-hidden='true' style="float: right; margin-top: -6%; font-size: 110%;"></i>

		<nav class="menu" id="principal">
			<ul>
				
				<li><a href="Entrada.php">Pessoas com meu Perfil <i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li><a href="Conversas.html">Conversas  <i class="fa fa-comments" aria-hidden="true"></i></a></li>
				<li><a href="Perfil.php">Perfil  <i class="fa fa-user" aria-hidden="true"></i></a></li>
				<li><a href="Login.html">Sair <i class="fa fa-sign-out" aria-hidden="true"></i>
				<li><a href="" class="voltar">Voltar  <i class="fa fa-share" aria-hidden="true" ></i></a></li>

				
			</ul>


</div>

<?php

session_start(); 
	$usuario = $_SESSION['Usuario'];
	$hashsenha = $_SESSION['SenhaUsuario'];
	$esporte = $_SESSION['EsporteUsuario'];
	$lazer = $_SESSION['LazerUsuario'];
	$time = $_SESSION['TimeUsuario'];
	$musica = $_SESSION['MusicalUsuario'];
	$trabalho = $_SESSION['TrabalhoUsuario'];
	$culinaria = $_SESSION['CulinariaUsuario'];
	

	$conexao = mysqli_connect('localhost', 'root', 'root', 'letsmeet') or die ('Erro ao tentar conectar');

	$sql = "SELECT * FROM cadastro WHERE  EsporteUsuario = '$esporte' or LazerUsuario = '$lazer' or MusicalUsuario = '$musica' or TrabalhoUsuario = '$trabalho' or CulinariaUsuario = '$culinaria';";

	$resultado = mysqli_query($conexao,$sql) or die ('Erro ao retornar dados');		

	if ($usuario == $usuario) {
			echo "<img src='usar.png' style='margin-top:25%;border-radius:100px;width:200px; height:200px; margin-left:22.5%; border: solid 2px #ccc;'>";
			echo "<br><br>";
			echo "<div style='text-align:center;'>Usuario: $usuario </div>";
			echo "<div style='text-align: center; '>Esporte favorito: $esporte </div>";
			echo "<div style='text-align: center;'>Lazer favorito: $lazer</div>";
			echo "<div style='text-align: center;'>Time usuario: $time</div>";
			echo "<div style='text-align: center;'>Culinaria favorito: $culinaria</div>";
			echo "<div style='text-align: center;'>Estilo musical favorito: $musica</div>";
			echo "<div style='text-align: center;'>Area de trabalho ou estudo: $trabalho</div>";
	

	while ($registro = mysqli_fetch_array($resultado)) {
			$nome = $registro['NomeUsuario'];
			$esporte = $registro['EsporteUsuario'];
			$lazer = $registro['LazerUsuario'];
			$time = $registro['TimeUsuario'];
			$musica = $registro['MusicalUsuario'];
			$trabalho = $registro['TrabalhoUsuario'];
			$culinaria = $registro['CulinariaUsuario'];}

			
	}
	mysqli_close($conexao);

?>


</body>
</html>	