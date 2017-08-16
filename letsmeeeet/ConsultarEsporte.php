<?php 

	echo "<table border=1>";
	echo "<br>";
	echo "<th>usuario</th>";
	echo "<th>Esporte favorito</th>";

	$conexao = mysqli_connect('localhost','root','root','letsmeet') or die ("Erro ao tentar conectar");
		$sql= "SELECT * FROM Cadastro where EsporteUsuario = 'futebol';";
	

	while ($registro = mysqli_fetch_array($resultado)) {
			$usuario = $registro['Usuario'];
			$futebol = $registro['EsporteUsuario'];
			
				echo "<tr>";
				echo "<td>".$usuario."</td>";
				echo "<td>".$futebol."</td>";
				echo "</tr>";
			}

		mysqli_close($conexao);

?>