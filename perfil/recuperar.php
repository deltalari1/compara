<?php
	function drawPerfil($filter){
		$conn = mysqli_connect("localhost", "root", "JGHga#567*HYt@", "compara");
		
		if ($filter == 0) {			
			$id_usuario = $_GET["usuario"];
				
			$sql = "SELECT nome, sobrenome, imagem, qtd_publicacoes, qtd_seguidores FROM usuarios WHERE id = $id_usuario"; // Mostrar postagens por ordem cronologica (id inverso)
	
			$registros = mysqli_query($conn, $sql);

			if (mysqli_num_rows($registros) > 0){
				if ($registro = mysqli_fetch_array($registros)){
					echo ("
					<div class='d-flex flex-row'>
						<img src='/compara/imagens/perfil/$registro[imagem]' class='rounded-circle' alt='' style='width: 200px; height: 200px; object-fit: cover;'>
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
					</div>");

					if (isset($_GET["usuario"]) && $_GET["usuario"] != $_SESSION["entrar"]){
						$sql = "SELECT `usuario_segue`, `usuario_seguido` FROM `segue` WHERE `usuario_segue` = $_SESSION[entrar] AND `usuario_seguido` = $_GET[usuario];";
						$registros = mysqli_query($conn, $sql);
						if (mysqli_num_rows($registros) == 0){
							echo ("
							<form method='POST'>
								<div class='d-flex flex-row'>
								<input class='btn btn-danger botao-vermelho fw-bold mt-3' id='seguir' type='submit' value='Seguir' name='seguir'>
								</div>
							</form>");
							if (isset($_POST['seguir'])){
								$conn = mysqli_connect("localhost", "root", "", "compara");
								$sql = "INSERT INTO `segue` (`usuario_segue`, `usuario_seguido`) VALUES ('$_SESSION[entrar]','$_GET[usuario]');";
								$sql2 = "UPDATE `usuarios` SET `qtd_seguidores`= qtd_seguidores + 1 WHERE id = $_GET[usuario];";
								mysqli_query($conn, $sql);
								mysqli_query($conn, $sql2);
								header("Location: /compara/perfil/perfil.php?usuario=" . $_GET["usuario"]);
							}
						} else {
							echo ("
							<form method='POST'>
								<div class='d-flex flex-row'>
								<input class='btn btn-danger botao-vermelho fw-bold mt-3' id='desseguir' type='submit' value='Deixar de seguir' name='desseguir'>
								</div>
							</form>");
							if (isset($_POST['desseguir'])){
								$conn = mysqli_connect("localhost", "root", "", "compara");
								$sql = "DELETE FROM `segue` WHERE `usuario_segue` = $_SESSION[entrar] AND `usuario_seguido` = $_GET[usuario];";
								$sql2 = "UPDATE `usuarios` SET `qtd_seguidores`= qtd_seguidores - 1 WHERE id = $_GET[usuario];";
								mysqli_query($conn, $sql);
								mysqli_query($conn, $sql2);
								header("Location: /compara/perfil/perfil.php?usuario=" . $_GET["usuario"]);
							}
						};
					};
				}
			} else {
				echo("<h3>Nenhuma publicação ainda.</h3>");
			}
		}
	}
	drawPerfil(0);
?>