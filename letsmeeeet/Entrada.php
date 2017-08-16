<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="logo.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="h-style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<title>Home</title>
</head>
<body id="home_fundo">
	<header>
		<h2>Pessoas com meu perfil</h2>
	</header>

</script>

	<div class="header_menu">Let's Meet

	<input type="checkbox" id="chk">
			<label for="chk" class="menu-icon">&#9776;</label>
			<div class="bg"></div>

		<nav class="menu" id="principal">
			<ul>
				
				<li><a href="Entrada.php">Pessoas com meu perfil <i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li><a href="Perfil.php">Perfil  <i class="fa fa-user" aria-hidden="true"></i></a></li>
				<li><a href="Login.html">Sair <i class="fa fa-sign-out" aria-hidden="true"></i>
				<li><a href="" class="voltar">Voltar  <i class="fa fa-share" aria-hidden="true" ></i></a></li>
				
			</ul>
		
		</nav>
		</div>
		







<?php
	 	session_start(); 
//preferencias do do usuario

	$usuario = $_SESSION['Usuario'];
	$hashsenha = $_SESSION['SenhaUsuario'];
	$esporte = $_SESSION['EsporteUsuario'];
	$lazer = $_SESSION['LazerUsuario'];
	$time = $_SESSION['TimeUsuario'];
	$musica = $_SESSION['MusicalUsuario'];
	$trabalho = $_SESSION['TrabalhoUsuario'];
	$culinaria = $_SESSION['CulinariaUsuario'];
	


	

	

	$conexao = mysqli_connect('localhost', 'root', 'root', 'letsmeet') or die ('Erro ao tentar conectar');

	$sql = "SELECT * FROM cadastro WHERE NomeUsuario = '$esporte' or LazerUsuario = '$lazer' or MusicalUsuario = '$musica' or TrabalhoUsuario = '$trabalho' or CulinariaUsuario = '$culinaria';";

	$resultado = mysqli_query($conexao,$sql) or die ('Erro ao retornar dados');


		while ($registro = mysqli_fetch_array($resultado)) {
			$nome = $registro['NomeUsuario'];
			$Sobrenome = $registro['SobrenomeUsuario'];
			$apelido = $registro['ApelidoUsuario'];
			$esporte = $registro['EsporteUsuario'];
			$lazer = $registro['LazerUsuario'];
			$time = $registro['TimeUsuario'];
			$musica = $registro['MusicalUsuario'];
			$trabalho = $registro['TrabalhoUsuario'];
			$culinaria = $registro['CulinariaUsuario'];
			



echo "<div class='teste_quadrado'>

<img src='mulher.jpg'>

</div>";


	
			

	echo "<div style='text-align: center;'>Nome: $nome $Sobrenome</div>"; 	
	echo "<div style='text-align: center;'>Apelido: $apelido</div>"; 	
	

}
	
					
	
			
				
				
			
			
	mysqli_close($conexao);
	echo "</table>";


?>


</body>
</html>	