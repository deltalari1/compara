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

	<link rel="stylesheet" type="text/css" href="/compara/estilo.css">
	<script src="/compara/postagem/seguir.js"></script>
	<script src="/compara/postagem/curtir.js"></script>
</head>

<body>
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/compara/navbar/navbartop.php";?>

	<div class="d-flex flex-wrap justify-content-center mt-4">
		<div class="d-flex flex-row">
			<div class="d-flex flex-column align-items-center mx-5">
				<?php include_once $_SERVER['DOCUMENT_ROOT']."/compara/perfil/recuperar.php";?>
			</div>
		</div>

		<div class="d-flex flex-row flex-wrap justify-content-center flex-grow-1 pt-md-3">
			<div class="d-flex flex-column">
				<?php include $_SERVER['DOCUMENT_ROOT']."/compara/postagem/publicacao.php";?>
			</div>
		</div>
	</div>

	<?php include_once $_SERVER['DOCUMENT_ROOT']."/compara/navbar/navbarbottom.php";?>

	<?php include_once $_SERVER['DOCUMENT_ROOT']."/compara/postagem/publicar.php";?>
	
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>