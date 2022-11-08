<!DOCTYPE html>
<html>
<head>
    <title>Perfil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="seguir.js"></script>
	<script src="curtir.js"></script>
</head>

<body>
	<?php include_once('navbartop.php');?>

	<div class="d-flex flex-wrap justify-content-center mt-4">
		<div class="d-flex flex-row">
			<div class="d-flex flex-column align-items-center mx-5">
				<div class="d-flex flex-row">
					<img src="perfil.jpg" class="rounded-circle" alt="" style="width: 200px;">
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
					<input class="btn btn-danger botao-vermelho fw-bold mt-3" id="seguir" type="button" value="Seguir">
				</div>
			</div>
		</div>

		<div class="d-flex flex-row justify-content-center flex-grow-1 pt-md-3">
			<?php require_once('postagem.php');?>
		</div>
	</div>

	<?php require_once('navbarbottom.php');?>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>