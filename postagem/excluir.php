<?php
	session_start();
	
	$id_postagem = $_GET["id_postagem"];
	$id_usuario = $_SESSION["entrar"];

	require_once "../conecta.php";

	if ($conn){
		$sql = "DELETE FROM postagens WHERE id = $id_postagem";

		if (mysqli_query($conn, $sql)){
			echo ("
				<script>
					alert('Publicação excluída com sucesso!');
				</script>
			");
			header("Location: ../perfil/perfil.php?usuario=$_SESSION[entrar]");

			$diminuir = "UPDATE 'usuarios' SET 'qtd_publicacoes' = ('qtd_publicacoes'-1) WHERE id = $id_usuario, ";
		} else {
			echo ("Houve um erro ao excluir a publicação.");
		}

		mysqli_close($conn);

	} else {
		echo("Falha na conexão: " . mysqli_connect_error() );
	}
?>