<?php
	echo "<table border=1>";
	echo "<br>";
	echo "<th>Nome usuario</th>";
	echo "<th>Esporte favorito</th>";
	echo "</tr>";

	$conexao = mysqli_connect('localhost', 'root', 'root', 'letsmeet') or die ('Erro ao tentar conectar');
	$sql = "SELECT * FROM cadastro WHERE EsporteUsuario = 'musculacao';";
	$resultado = mysqli_query($conexao,$sql) or die ('Erro ao retornar dados');

	while ($registro = mysqli_fetch_array($resultado)) {
			$nome = $registro['NomeUsuario'];
			$futebol =  $registro['EsporteUsuario'];

				echo "<tr>";
				echo "<td>".$nome."</td>";
				echo "<td>".$futebol."</td>";
				echo "</tr>";
			}
	mysqli_close($conexao);
	echo "</table>";

?>