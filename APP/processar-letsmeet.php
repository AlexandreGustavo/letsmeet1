<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<title></title>
</head>
<body style="background-color:rgba(0,191,255,0.4);">

<p style="font-size: 4em; text-align: center;">Cadastro realizado com sucesso <i class="fa fa-check" aria-hidden="true"></i> </p>
<a href="login.html" style="font-size: 4em; margin-left:13%; color:black">Clique para fazer o Login</a><br><br><br><br><br><br><br><br><br><br><br><br>
	<a style="margin-left:22%;" href="login.html"><img src="logo.png"></a>
<?php

	$nome = $_POST['NomeUsuario'];
	$sobrenome = $_POST['SobrenomeUsuario'];
	$apelido = $_POST['ApelidoUsuario'];
	$idade = $_POST['IdadeUsuario'];
	$sexo = $_POST['SexoUsuario'];
	$usuario = $_POST['Usuario'];
	$esporte = $_POST['EsporteUsuario'];
	$lazer = $_POST['LazerUsuario'];
	$time = $_POST['TimeUsuario'];
	$musica = $_POST['MusicalUsuario'];
	$trabalho = $_POST['TrabalhoUsuario'];
	$culinaria =$_POST['CulinariaUsuario'];
	$senha = $_POST['SenhaUsuario'];
	$facebook = $_POST['Facebook'];
	$whatsapp = $_POST['whatsapp'];
	$instagram = $_POST['instagram'];
	$twitter = $_POST['twitter'];
	$snapchat = $_POST['snapchat'];
	$skype = $_POST['skype'];

	$hashsenha = PASSWORD_hash($senha, PASSWORD_DEFAULT);

	$conexao = mysqli_connect('localhost', 'root', 'root', 'letsmeet');
		if (!$conexao) {
			die('Não foi possivel conectar ao MySQL');
		}

	$sql = "INSERT INTO cadastro(NomeUsuario, SobrenomeUsuario, ApelidoUsuario, IdadeUsuario, SexoUsuario, Usuario, EsporteUsuario, LazerUsuario, TimeUsuario, MusicalUsuario, TrabalhoUsuario, CulinariaUsuario, SenhaUsuario, Facebook, whatsapp, instagram, twitter, snapchat, skype) 

		VALUES ('$nome', '$sobrenome', '$apelido', '$idade', '$sexo', '$usuario', '$esporte', '$lazer', '$time', '$musica' ,'$trabalho', '$culinaria', '$hashsenha', '$facebook', '$whatsapp', '$instagram', '$twitter', '$snapchat', '$skype')";
	
		mysqli_query($conexao,$sql) or die('Erro ao tentar inserir registros');
		mysqli_close($conexao);
?>
	
</body>
</html>
