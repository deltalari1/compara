<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";

	if (isset($_POST['enviar']) == true){
		$categoria = $_POST["categoria"];
		$loja = $_POST["loja"];
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];
		$uploadfile = "";
		
		if ($_FILES['imagem']['error'] != 4){
			$uploaddir = 'C:\xampps\htdocs\compara\imagens/';
			$ext = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
			$nome_arquivo = time() . "." . $ext;
			$uploadfile = $uploaddir . $nome_arquivo;
			if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)){

				$sql = "INSERT INTO postagens (descricao, imagem, preco, qtd_favoritos, id_usuario, id_loja, id_categoria) VALUES ('$descricao', '$nome_arquivo', '$preco', 0, 1, '$loja', '$categoria')";}
			} else {
				echo("Não foi possível enviar a imagem.");
			}
		if (mysqli_query($conn, $sql)){
				
			}
			mysqli_close($conn);
		} else {
			echo("Por favor, adicione uma foto ao seu produto.");
		}
?>
