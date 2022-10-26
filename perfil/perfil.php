<!DOCTYPE html>
<html>
<head>
    <title>Perfil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="estilo_perfil.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="https://kit.fontawesome.com/73333f2213.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="d-flex flex-wrap justify-content-center" style="margin-top: 100px">
		<div class="d-flex flex-row">
			<div class="d-flex flex-column justify-content-center align-items-center p-5">
				<div class="d-flex flex-row">
					<img src="perfil.jpg" class="rounded-circle" alt="" style="width: 300; height: 200px">
				</div>
				<div class="d-flex flex-row mt-3">
					<div class="d-flex flex-column fs-3 fw-bold">Nome Sobrenome</div>
					<div class="d-flex flex-column align-self-center mx-2">
						<a class="link-dark" href="#" role="button">
							<i class="bi bi-pencil-fill"></i>
						</a>
					</div>
				</div>
				<div class="d-flex flex-row">
					<div class="d-flex flex-column fw-bold me-1">0</div>
					<div class="d-flex flex-column">publicações</div>
					<div class="d-flex flex-column mx-3">|</div>
					<div class="d-flex flex-column fw-bold me-1">0</div>
					<div class="d-flex flex-column">seguidores</div>
				</div>
				<div class="d-flex flex-row">
					<input class="btn botao-vermelho btn-danger fw-bold mt-3" type="submit" value="Seguir">
				</div>
			</div>
		</div>

		<div class="d-flex flex-row justify-content-center flex-grow-1">
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
							<img src="pao.jpg" alt="" style="object-fit: cover;">
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

						<div class="flex-column flex-grow-1">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<nav class="navbar fixed-top navbar-expand-md navbar-dark fundo-customizado">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="logo_branco.png" width="150" height="60" alt="">
			</a>

			<button class="navbar-toggler rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars fa-1x"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
				<div class="me-auto">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
							<ul class="dropdown-menu rounded-0">
								<li><a class="dropdown-item" href="#">Alimentação</a></li>
								<li><a class="dropdown-item" href="#">Moda</a></li>
								<li><a class="dropdown-item" href="#">Beleza</a></li>
								<li><a class="dropdown-item" href="#">Entretenimento</a></li>
								<li><a class="dropdown-item" href="#">Saúde</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
				<div class="me-md-3">
					<button type="button" class="btn btn-secondary rounded-0 d-none d-md-block text-nowrap fw-bold">Adicionar oferta</button>
					<div id="adicionarOferta" class="modal">
			  			<div class="modal-content">
			    		<span class="close">&times;</span>
			    	<div class="Postagem">  
					<div class="infousuário"></div>
			<div class="imgusuário"></div>
			<strong> Gosave Dranft</strong>
		</div>
		<form action="" class="formPost">
			<textarea name="textarea" placeholder="Ouviu falar de alguma promoção?"></textarea>
			<div class="Iconesebotões">
				<div class="icones">
					<button class="btnFileForm"><img src="https://w7.pngwing.com/pngs/535/334/png-transparent-computer-icons-add-button-logo-number-add-button-thumbnail.png" background="invisible" width="10%" alt="imagem">
					</button>
					</div> 
				<button type="submit" class="Bsubmite"> Publicar</button>
				</div> 
			</form> 
		</div> 
			  </div>

				</div>

				<div>
					<form class="d-flex" role="search">
						<input class="form-control border-0 rounded-0 " type="search" placeholder="Pesquisar oferta..." aria-label="Pesquisar oferta">
						<button class="btn btn-light border-0 rounded-0" type="submit">
							<span class="fas fa-search"></span>
						</button>
					</form>
				</div>
				
				<div class="ms-md-2">
					<ul class="navbar-nav d-none d-md-block">
						<li class="nav-item dropdown">
							<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-user-alt fa-1x"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-end rounded-0">
								<li><a class="dropdown-item" href="#">Perfil</a></li>
								<li><a class="dropdown-item" href="#">Configurações</a></li>
								<li><a class="dropdown-item" href="#">Sair</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
	<nav class="navbar fixed-bottom navbar-dark bg-custom d-block d-md-none d-xl-none d-xxl-none fundo-customizado">
		<div class="container-fluid justify-content-evenly p-1">
			<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa-solid fa-house fa-2x icones-rodape"></i>
			</a>
			
			<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa-solid fa-circle-plus fa-2x icones-rodape"></i>
			</a>

			<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fas fa-user-alt fa-2x icones-rodape"></i>
			</a>
		</div>
	</nav>
	

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>