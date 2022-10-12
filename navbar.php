<!DOCTYPE html>
<html>
<head>
    <title>Barra de navegação</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="https://kit.fontawesome.com/73333f2213.js" crossorigin="anonymous"></script>
</head>

<body>
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
							<a class="nav-link dropdown-toggle texto-negrito" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
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
					<button type="button" class="btn btn-secondary rounded-0 d-none d-md-block text-nowrap texto-negrito">Adicionar oferta</button>
				</div>

				<div>
					<form class="d-flex" role="search">
						<input class="form-control border-0 rounded-0 " type="search" placeholder="Pesquisar oferta..." aria-label="Pesquisar oferta">
						<button class="btn btn-light border-0 rounded-0" type="submit"">
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