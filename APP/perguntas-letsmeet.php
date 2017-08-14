<?php

	session_start();

	$Idusuario = $_SESSION["IdUsuario"];

	$esporte = $_POST['esporte'];
	$lazer = $_POST['lazer'];
	$time = $_POST['time'];
	$musica = $_POST['musica'];
	$trabalho = $_POST['trabalho'];
	$culinaria = $_POST['culinaria'];

	$conexao = mysqli_connect('localhost', 'root', 'root', 'letsmeet');
		if (!$conexao) {
			die('Não foi possivel conectar ao MySQL');
		}

	
	$sql = "INSERT INTO perguntas (IdUsuario, EsporteFavorito, LazerFavorito, TimeCoracao, MusicalFavorito, AreaTrabalho, CulináriaFavorita) VALUES ('$Idusuario', '$esporte', '$lazer', '$time', '$musica', '$trabalho', '$culinaria')";
	
		mysqli_query($conexao,$sql) or die ('Erro ao tentar inserir registros');
		echo "Registro inserido com sucesso";
		mysqli_close($conexao);
?>

