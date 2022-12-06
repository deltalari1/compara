<nav class="navbar sticky-top navbar-expand-md navbar-dark fundo-customizado">
	<div class="container-fluid">
		<a class="navbar-brand">
			<img src="/compara/navbar/logobranco.png" width="150" height="60" alt="">
		</a>

		<button class="navbar-toggler rounded-0 border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<i class="bi bi-list"></i>
		</button>

		<div class="collapse navbar-collapse" id="navbar">
			<div class="me-auto">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link fw-bold d-none d-md-block" aria-current="page" href="/compara/linhadotempo/linhadotempo.php?usuario=1">Início</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
						<ul class="dropdown-menu rounded-0">
							<?php include_once $_SERVER['DOCUMENT_ROOT']."/compara/categorias/selecionar.php";?>
						</ul>
					</li>
				</ul>
			</div>
			
			<div class="me-md-3">
				<button type="button" class="btn btn-secondary rounded-0 d-none d-md-block text-nowrap fw-bold" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Adicionar oferta</button>
			</div>

			<div>
				<form class="d-flex" role="search">
					<input class="form-control border-0 rounded-0" type="search" placeholder="Pesquisar oferta..." aria-label="Pesquisar oferta">
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
							<li><a class="dropdown-item" href="/compara/perfil/perfil.php?usuario=1">Perfil</a></li>
							<li><a class="dropdown-item" href="/compara/favoritos/mostrar.php?usuario=1">Favoritos</a></li>
							<li><a class="dropdown-item" href="/compara/configuracao/configuracao.php?usuario=1">Configurações</a></li>
							<li><a class="dropdown-item text-secondary" href="/compara/registro/sair.php">Sair</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>

<?php include_once $_SERVER['DOCUMENT_ROOT']."/compara/postagem/publicar.php";?>