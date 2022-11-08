<!DOCTYPE html>
<html>
<head>
    <title>Postagem</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="curtir.js"></script>
</head>
<body>
	<div style="max-width: 600px">
		<div class="container-fluid-bottom p-3">
			<!-- Foto de perfil, nome e sobrenome, data que foi publicada a oferta, endereço do local onde está a oferta, botão de editar a publicação -->
			<div class="d-flex flex-row align-items-center">
				<div class="flex-column">
					<div class="flex-row p-2">
						<a href="#" role="button">
							<img src="perfil.jpg" class="rounded-circle" alt="" style="width: 40px; height: 40px">
						</a>
					</div>
				</div>

				<div class="flex-column flex-fill">
					<div class="flex-row">
						<a class="link-dark text-decoration-none fw-bold align-self-center" href="#">Nome Sobrenome</a>
					</div>
					<div class="flex-row">
						<i class="bi bi-geo-alt-fill bi align-self-center fa-sm "></i>
						<a class="link-dark text-decoration-none fst-italic" href="" style="font-size: 15px;">Localização da oferta</a>
					</div>
				</div>

				<div class="flex-column">
					<div class="flex-row flex-shrink-1 p-3">
						<a class="link-dark" href="#" role="button">
							<i class="bi bi-pencil-fill"></i>
						</a>
					</div>
				</div>
			</div>

			<!-- Descrição da oferta -->
			<div class="d-flex flex-row align-items-center">
				<div class="flex-column flex-fill p-3">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget tortor nibh. Suspendisse at cursus est. Fusce mollis neque in tristique facilisis. Praesent nisl purus, porta sed scelerisque et, aliquam sit amet velit. Sed lectus mauris, rhoncus in quam ac, tempor molestie dolor. Pellentesque et laoreet neque, a mattis risus.
				</div>
			</div>

			<!-- Imagem da oferta -->
			<div class="d-flex flex-row align-items-center mb-4 mx-4">
				<div class="flex-column ratio ratio-1x1">
					<img src="postagem.jpg" alt="" style="object-fit: cover;">
				</div>
			</div>

			<!-- Valor da oferta,  botão de curtir a publicação-->
			<div class="d-flex flex-row align-items-center m-2">
				<div class="flex-column flex-fill text-end">
					<div class="flex-row p-2">R$</div>
				</div>

				<div class="flex-column text-center">
					<div class="flex-row fs-4 fw-bold p-2">1541561</div>
				</div>

				<div class="flex-column flex-grow-1 text-end">
					<a role="button">
						<i class="fa-heart fa-regular fa-xl text-dark"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>