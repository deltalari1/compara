<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/compara/conecta.php";
	if (isset($_POST['enviar']) == true){
		$categoria = $_POST["categoria"];
		$loja = $_POST["loja"];
		$descricao = $_POST["descricao"];
		$preco = $_POST["preco"];
		$uploadfile = "";
		$usuarioID = $_GET["usuario"];
		if (empty($categoria) || empty($loja) || empty($descricao) || empty($preco)){
			echo("Por favor, preencha todas os campos antes de continuar!");
		} else {
			if ($_FILES['imagem']['error'] != 4){
				$uploaddir = 'C:\xampp\htdocs\compara\imagens\publicacao/';
				$ext = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
				$nome_arquivo = time() . "." . $ext;
				$uploadfile = $uploaddir . $nome_arquivo;
	
				if (move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfile)){
					$sql = "INSERT INTO postagens (descricao, preco, imagem, id_loja, id_usuario, id_categoria) VALUES ('$descricao', '$preco', '$nome_arquivo', '$loja', '$usuarioID', '$categoria')";
	
					if (mysqli_query($conn, $sql)){
						echo("Publicação feita com sucesso!");
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
