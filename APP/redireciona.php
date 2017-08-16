<?php
    session_start();
	function redirecionar($nova_pagina) {
		header("Location: " . $nova_pagina);
	exit;
	} 

	$usuario = $_POST['Usuario'];
	$senha = $_POST['SenhaUsuario'];

	$conexao = mysqli_connect('localhost','root','root','letsmeet') or die ("Erro ao tentar conectar");

	$sql= "SELECT * FROM cadastro where Usuario = '$usuario';"; 
	$resultado =mysqli_query($conexao,$sql) or die ("Erro ao retornar dados");

	$registro = mysqli_fetch_array($resultado);
		if (!$resultado) {
			redirecionar("user_inexistente.html");
			die();
		}
	
	$usuario = $registro['Usuario'];
	$hashsenha = $registro['SenhaUsuario'];

	if (password_verify ($senha, $hashsenha)) {
				$_SESSION["Usuario"] = $registro['Usuario'];
				$_SESSION["NomeUsuario"] = $registro['NomeUsuario'];
				$_SESSION["SenhaUsuario"] = $registro['SenhaUsuario'];
				$_SESSION["EsporteUsuario"] = $registro['EsporteUsuario'];
				$_SESSION["LazerUsuario"] = $registro['LazerUsuario'];
				$_SESSION["TimeUsuario"] = $registro['TimeUsuario'];
				$_SESSION["MusicalUsuario"] = $registro['MusicalUsuario'];
				$_SESSION["TrabalhoUsuario"] = $registro['TrabalhoUsuario'];
				$_SESSION["CulinariaUsuario"] = $registro['CulinariaUsuario'];
				$_SESSION["Facebook"] = $registro['Facebook'];
				$_SESSION["whatsapp"] = $registro['whatsapp'];
				$_SESSION["instagram"] = $registro['instagram'];
				$_SESSION["twitter"] = $registro['twitter'];
				$_SESSION["snapchat"] = $registro['snapchat'];
				$_SESSION["skype"] = $registro['skype'];

			redirecionar("Entrada.php?nome=$nome");
		}	
	else {
		redirecionar("acesso_negado.html");
	}	

?>











