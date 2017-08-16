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
			<div class="bg"></div>

			

		<nav class="menu" id="principal">
			<ul>
				
				<li><a href="Entrada.php">Pessoas com meu Perfil <i class="fa fa-home" aria-hidden="true"></i></a></li>
				<li><a href="Perfil.php">Perfil  <i class="fa fa-user" aria-hidden="true"></i></a></li>
				<li><a href="Login.html">Sair <i class="fa fa-sign-out" aria-hidden="true"></i>
				<li><a href="" class="voltar">Voltar  <i class="fa fa-share" aria-hidden="true" ></i></a></li>
				
				
			</ul>


</div>

<img  src='usar.png' style='margin-top:25%;border-radius:100px;width:200px; height:200px; margin-left:22.5%; border: solid 2px #ccc';>

<!--<style>
  .thumb {
    height: 75px;
    border: 1px solid #000;
    margin: 10px 5px 0 0;
  }
</style>

<input type="file" id="files" name="files[]" multiple />
<output id="list"></output>

<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>-->

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

	if ($usuario == $usuario){
			
			echo "<br><br>";
			echo "<div style='text-align:center;line-height:2; font-size:22px; font-weight: bold; '> $usuario </div>";
			echo "<div style='text-align: center;line-height:2; font-size:18px;'>Esporte favorito: $esporte </div>";
			echo "<div style='text-align: center;line-height:2; font-size:18px;'>Lazer favorito: $lazer</div>";
			echo "<div style='text-align: center;line-height:2; font-size:18px; '>Time usuario: $time</div>";
			echo "<div style='text-align: center;line-height:2;font-size:18x; '>Culinaria favorito: $culinaria</div>";
			echo "<div style='text-align: center;line-height:2; font-size:18px;'>Estilo musical favorito: $musica</div>";
			echo "<div style='text-align: center;line-height:2; font-size:18px;'>Area de trabalho ou estudo: $trabalho</div>";
			

	while ($registro = mysqli_fetch_array($resultado)) {
			$nome = $registro['NomeUsuario'];
			$esporte = $registro['EsporteUsuario'];
			$lazer = $registro['LazerUsuario'];
			$time = $registro['TimeUsuario'];
			$musica = $registro['MusicalUsuario'];
			$trabalho = $registro['TrabalhoUsuario'];
			$culinaria = $registro['CulinariaUsuario'];
			$face = $registro['Facebook'];
			$whatsapp = $registro['whatsapp'];
			$insta = $registro['instagram'];
			$twitter = $registro['twitter'];
			$snapchat = $registro['snapchat'];
			$skype = $registro['skype'];

		}
		echo "<br>";
		echo "<br>";
		echo "<div style='text-align: center;font-weight: bold;line-height:2;background-color:#ccc;color:white font-size:25px;'>Redes Sociais </div>";
		echo "<div style='text-align: center;font-weight: bold;line-height:2;background-color:#008000;color:white'>Whatsapp: $whatsapp</div>";
		echo "<div style='text-align: center;font-weight: bold;line-height:2;background-color:#0000FF;color:white'>Facebook: $face</div>";
		echo "<div style='text-align: center;font-weight: bold;line-height:2;background-color:#C71585'>Instagram: $insta</div>";
		echo "<div style='text-align: center;font-weight: bold;line-height:2;background-color:#87CEEB'>Twitter: $twitter</div>";
		echo "<div style='text-align: center;font-weight: bold;line-height:2;background-color:#FFFF00;'>SnapChat: $snapchat</div>";
		echo "<div style='text-align: center;font-weight: bold;line-height:2;background-color:#00BFFF; margin-bottom:30px;'>Skype: $skype</div>";
		echo "</div>";	
	}
	mysqli_close($conexao);

?>


</body>
</html>	