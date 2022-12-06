<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";
	
	$sql = "SELECT * FROM lojas ORDER BY nome ASC";
	$registros = mysqli_query($conn, $sql);

	if (mysqli_num_rows($registros) > 0){
		while ($registro = mysqli_fetch_array($registros)){
			echo("<option value='$registro[id]'>$registro[nome]</option>");
		}
	}
?>
