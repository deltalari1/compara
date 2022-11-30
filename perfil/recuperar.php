<?php
	function drawPerfil($filter){
		$conn = mysqli_connect("localhost", "root", "JGHga#567*HYt@", "compara");
		
		if ($filter == 0) {			
			$id_usuario = $_GET["usuario"];
				
			$sql = "SELECT nome, sobrenome, imagem, qtd_publicacoes, qtd_seguidores FROM usuarios WHERE id = $id_usuario"; // Mostrar postagens por ordem cronologica (id inverso)
	
			$registros = mysqli_query($conn, $sql);

			// Com a tabela acessada, devemos exibir uma postagem, diminuir o numero de id em 1, exibir a postagem e repetir, por meio de um while
			if (mysqli_num_rows($registros) > 0){
				if ($registro = mysqli_fetch_array($registros)){
					echo ("
					<div class='d-flex flex-row'>
						<img src='/compara/imagens/$registro[imagem]' class='rounded-circle' alt='' style='width: 200px;'>
					</div>
					<div class='d-flex flex-row mt-3'>
						<div class='d-flex flex-column fs-3 fw-bold'>$registro[nome] $registro[sobrenome]</div>
					</div>
					<div class='d-flex flex-row'>
						<div class='d-flex flex-column fw-bold me-1'>
							$registro[qtd_publicacoes]
						</div>
						<div class='d-flex flex-column'>publicações</div>
						<div class='d-flex flex-column mx-3'>|</div>
						<div class='d-flex flex-column fw-bold me-1'>
							$registro[qtd_seguidores]
						</div>
						<div class='d-flex flex-column'>seguidores</div>
					</div>
					<div class='d-flex flex-row'>
						<input class='btn btn-danger botao-vermelho fw-bold mt-3' id='seguir' type='button' value='Seguir'>
					</div>
					");
				}
			}
			} else {
				echo("<h3>Nenhuma publicação ainda.</h3>");
			}
		}
	drawPerfil(0);
?>