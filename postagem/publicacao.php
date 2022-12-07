<?php
	function drawPost($filter){
		$conn = mysqli_connect("localhost", "root", "", "compara");
		
		if ($filter == "perfil") {
			$id_usuario = $_GET["usuario"];
			// Mostrar postagens por ordem cronologica (id inverso) do usuario específico
			$consulta = "WHERE id_usuario = $id_usuario ORDER BY postagens.id DESC";
		} else if ($filter == "crono") {
			//Mostrar postagens por ordem cronologica de todo o site
			$consulta = "ORDER BY postagens.id DESC";
		} else if ($filter == "cat") {
			$id_categoria = $_GET["categoria"];

			$consulta = "WHERE id_categoria = $id_categoria ORDER BY postagens.id DESC";
		} else if ($filter == "moots"){
			$id_usuario = $_GET["usuario"];

			$sql = "SELECT 'usuario_seguido' FROM segue WHERE 'usuario_segue' = $id_usuario;";

			$registros = mysqli_query($conn, $sql);

			if (mysqli_num_rows($registros) > 0){
				while ($registro = mysqli_fetch_array($registros)){
					$segue = array();
					array_push($segue, $registro["usuario_seguido"]);
				}
				$consulta = "WHERE id_usuario IN (" . implode(',', $segue) . ") ORDER BY postagens.id DESC;";
			} else {
				echo("<div class='text-center'><h6>Você ainda não seguiu ninguém! Clique no nome de algum usuário para entrar em seu perfil e o seguir, e comece a customizar a sua área inicial!</h6></div>");
				$consulta = "ORDER BY idPostagem DESC";
			}
		} else {
			$consulta = "ORDER BY idPostagem DESC";
		}

		$sql = "SELECT postagens.id AS idPostagem, postagens.descricao, postagens.imagem AS imagemPostagem, postagens.preco, lojas.nome AS nomeLoja, lojas.endereco, usuarios.id AS idUsuario, usuarios.nome AS nomeUsuario,  usuarios.sobrenome, usuarios.imagem AS imagemUsuario, categorias.nome AS nomeCategoria FROM postagens INNER JOIN lojas ON lojas.id = postagens.id_loja INNER JOIN usuarios ON usuarios.id = postagens.id_usuario INNER JOIN categorias ON categorias.id = postagens.id_categoria ".$consulta;

		$registros = mysqli_query($conn, $sql);

		// Com a tabela acessada, devemos exibir uma postagem
		if (mysqli_num_rows($registros) > 0){
			while ($registro = mysqli_fetch_array($registros)){
				echo ("
					<div class='container p-3 border-bottom' style='max-width: 700px'>
						<!--Foto de perfil, nome e sobrenome, data que foi publicada a oferta, endereço do local onde está a oferta, botão de excluir a publicação-->
						<div class='d-flex flex-row align-items-center'>
							<div class='flex-column'>
								<div class='flex-row p-2'>
									<a href='#' role='button'>
										<img src='/compara/imagens/perfil/$registro[imagemUsuario]' class='rounded-circle' alt='' style='width: 40px; height: 40px; object-fit: cover;'>
									</a>
								</div>
							</div>
					
							<div class='flex-column flex-fill'>
								<div class='flex-row'>
									<a class='link-dark text-decoration-none fw-bold align-self-center' href='/compara/perfil/perfil.php?usuario=$registro[idUsuario]'>$registro[nomeUsuario] $registro[sobrenome]</a>
								</div>
								<div class='flex-row'>
									<i class='bi bi-geo-alt-fill bi align-self-center fa-sm '></i>
									<a class='link-dark text-decoration-none fst-italic' href='' style='font-size: 15px;'>$registro[nomeLoja] - $registro[endereco]</a>
								</div>
							</div>
					
							<div class='flex-column'>
								<div class='flex-row flex-shrink-1 p-3'>
									<a class='link-dark' href='../postagem/excluir.php?id_postagem=$registro[idPostagem]' role='button'>
										<i class='bi bi-pencil-fill'></i>
									</a>
								</div>
							</div>
						</div>
					
						<!--Descrição da oferta-->
						<div class='d-flex flex-row align-items-center'>
							<div class='flex-column flex-fill p-3'>
								$registro[descricao]
							</div>
						</div>
					
						<!--Imagem da oferta-->
						<div class='d-flex flex-row align-items-center mb-4 mx-4'>
							<div class='flex-column ratio ratio-1x1'>
								<img src='/compara/imagens/publicacao/$registro[imagemPostagem]' style='object-fit: cover;'>
							</div>
						</div>
					
						<!--Valor da oferta, botão de curtir a publicação-->
						<div class='d-flex flex-row align-items-center m-2'>
							<div class='flex-column flex-fill text-end'>
								<div class='flex-row p-2'>R$</div>
							</div>
					
							<div class='flex-column text-center'>
								<div class='flex-row fs-4 fw-bold p-2'>$registro[preco]</div>
							</div>
					
							<div class='flex-column flex-grow-1 text-end'>
								<a role='button'>
									<i class='fa-heart fa-regular fa-xl text-dark'></i>
								</a>
							</div>
						</div>
					</div>");
			}
		} else {
			echo("<div class='text-center' style='margin-top: 2rem;'><h3 class='fw-bold'>Nenhuma publicação ainda.</h3></div>");
		}
}
?>
