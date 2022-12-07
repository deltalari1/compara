<?php
	include_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";

	$id_usuario = $_GET["usuario"];
	
	if (isset($_POST['salvar']) == true){
		$nome = $_POST["nome"];
		$sobrenome = $_POST["sobrenome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];

		$uploadfile = "";

		if ($_FILES['imagem']['error'] != 4){ // Testa se uma imagem foi enviada no formulário
			$uploaddir = 'C:\Apache24\htdocs\compara\imagens\perfil/';
			$ext = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
			$nome_arquivo = time() . "." . $ext;
			$uploadfile = $uploaddir . $nome_arquivo;

			if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)){ // Retorna true se conseguiu enviar a imagem com sucesso
    			$sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = '$senha', imagem = '$nome_arquivo' WHERE id = $id_usuario";
			} else {
				echo("Não foi possível enviar a imagem.");
			}
		} else {
			$sql = "UPDATE usuarios SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', senha = '$senha' WHERE id = $id_usuario";
		}

		if (mysqli_query($conn, $sql)){
			
		} else {
			echo ("Erro: $sql <br>" . mysqli_error($conn) );
		}
		mysqli_close($conn);
	}
?>
