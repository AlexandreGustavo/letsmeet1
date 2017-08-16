<?php
	
	echo "<table border=1>";
	echo "<br>";
	echo "<th>Usuario</th>";
	echo "<th>Esporte favorito</th>";
	echo "<th>Lazer favorito</th>";
	echo "<th>Time de coraçao</th>";
	echo "<th>Estilo musical favorito</th>";
	echo "<th>Área de trabalho ou estudo</th>";
	echo "<th>Culinaria</th>";
	echo "</tr>";

	$conexao = mysqli_connect('localhost', 'root', 'root', 'letsmeet');
		if (!$conexao) {
			die('Não foi possivel conectar ao MySQL');
		}

		$sql = "SELECT * FROM cadastro";
		$resultado = mysqli_query($conexao,$sql) or die ('Erro ao retornar dados');

			while ($registro = mysqli_fetch_array($resultado)) {
					$usuario  = $registro['Usuario'];
					$esporte = $registro['EsporteUsuario'];
					$lazer = $registro['LazerUsuario'];
					$time  = $registro['TimeUsuario'];
					$musica = $registro['MusicalUsuario'];
					$trabalho = $registro['TrabalhoUsuario'];
					$culinaria = $registro['CulinariaUsuario'];
				echo "<tr>";
				echo "<td>". $usuario . "<br>";
				echo "<td>". $esporte . "<br>";
				echo "<td>". $lazer . "<br>";
				echo "<td>". $time . "<br>";
				echo "<td>".$musica. "<br>";
				echo "<td>". $trabalho . "<br>";
				echo "<td>". $culinaria . "<br>";
			}


?>