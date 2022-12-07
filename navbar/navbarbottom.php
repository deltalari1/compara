<nav class="navbar fixed-bottom navbar-dark bg-custom d-block d-md-none fundo-customizado">
	<div class="container-fluid justify-content-evenly p-1">
		
		<?php
			echo("
				<a class='nav-link' href='../linhadotempo/linhadotempo.php?usuario=$_SESSION[entrar]' role='button'>
					<i class='fa-solid fa-house fa-2x text-white'></i>
				</a>
				<a class='nav-link' role='button' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
					<i class='fa-solid fa-circle-plus fa-2x text-white'></i>
				</a>
				<a class='nav-link' href='/compara/perfil/perfil.php?usuario=$_SESSION[entrar]' role='button'>
					<i class='fas fa-user-alt fa-2x text-white'></i>
				</a>
			");
		?>

		
	</div>
</nav>

<?php include_once "../postagem/publicar.php";?>