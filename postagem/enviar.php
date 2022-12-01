<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";

	if (isset($_POST['enviar']) == true){
		$categoria = $_POST["categoria"];
		$loja = $_POST["loja"];
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];
		$uploadfile = "";
		
		if ($_FILES['imagem']['error'] != 4){
			$uploaddir = '/compara/imagens/';
			$ext = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
			$nome_arquivo = time() . "." . $ext;
			$uploadfile = $uploaddir . $nome_arquivo;

			if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)){
				$sql = "INSERT INTO postagem (categoria, loja, descricao, preco, imagem) VALUES ('$categoria', '$loja', '$descricao', '$preco', '$nome_arquivo')";
			} else {
				echo("Não foi possível enviar a imagem.");
			}
				
			if (mysqli_query($conn, $sql)){
				
			}
			mysqli_close($conn);
		} else {
			echo("Por favor, adicione uma foto ao seu produto.");
		}
	}
?>
