<?php
	session_start();
	require_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";
	if (isset($_POST['enviar']) == true){
		$categoria = $_POST["categoria"];
		$loja = $_POST["loja"];
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];
		$uploadfile = "";
		$id_usuario = $_SESSION["entrar"];

		if (empty($categoria) || empty($loja) || empty($descricao) || empty($preco)){
			echo("Por favor, preencha todas os campos antes de continuar!");
		} else {
			if ($_FILES['imagem']['error'] != 4){
				$uploaddir = 'C:\Apache24\htdocs\compara\imagens\publicacao/';
				$ext = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
				$nome_arquivo = time() . "." . $ext;
				$uploadfile = $uploaddir . $nome_arquivo;
	
				if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)){
					$sql = "INSERT INTO postagens (descricao, preco, imagem, id_loja, id_usuario, id_categoria) VALUES ('$descricao', '$preco', '$nome_arquivo', '$loja', '$id_usuario', '$categoria')";
	
					if (mysqli_query($conn, $sql)){
						echo("Publicação feita com sucesso!");

						$sql = "UPDATE usuarios SET qtd_publicacoes = qtd_publicacoes + 1 WHERE id = $id_usuario";
						mysqli_query($conn, $sql);
						header("Location: ../perfil/perfil.php?usuario=" . $_SESSION["entrar"]);
					}
				} else {
					echo("Não foi possível enviar a imagem.");
				}
				mysqli_close($conn);
			} else {
				echo("Por favor, adicione uma foto do seu produto.");
			}
		}
	}
?>